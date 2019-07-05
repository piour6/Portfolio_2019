<?php
ini_set('session.cookie_secure','1');
ini_set('session.cookie_httponly','1');
session_start();

header('X-Frame-Options: DENY');

include('version.php');

include('../include/config.php');

include($root . '/include/domain.php');

include($root . '/include/' . $include_folder . '/function.php');

/* ==========================================================================
    Url rewriting - rules
   ========================================================================== */

include($root . '/include/' . $include_folder . '/rewriting.php');

/* ==========================================================================
    Preview key
   ========================================================================== */

// if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']!='pierre'){
//     if(isset($_GET['key']) && $_GET['key']=='0eb85d42d841p706ae37c4805636fdf5b31k23jf'){$_SESSION['access']=1;}
//     if(!isset($_SESSION['access']) || $_SESSION['access']!=1){
//         exit();
//     }
// }

/* ==========================================================================
    Check domain
   ========================================================================== */

if($_SERVER['HTTP_HOST'] != 'pierre'){
    if(
        (($www ? "www." : "") . $infoDomain['url'] != $_SERVER['HTTP_HOST'])
        ||
        (($www && strpos($_SERVER['HTTP_HOST'],'www') === FALSE) || (!$www && strpos($_SERVER['HTTP_HOST'],'www') !== FALSE))
        ||
        ($secure && (!is_ssl($_SERVER)))  //si le site est sans S on repars vers le S
    ){
        header('HTTP/1.0 301 Moved Permanently'); 
        header('Location: ' . $baseRoot . $_SERVER['REQUEST_URI']); 
        exit();
    }
}

$prim_uri_arr=explode('#',$_SERVER['REQUEST_URI']);
$prim_uri=$prim_uri_arr[0];
$uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
$uri = trim( str_replace( $uri, '', $prim_uri ), '/' );
$uri = urldecode( $uri );

$parseUrl = parse_url($uri);
$uri = isset($parseUrl['path']) ? htmlspecialchars($parseUrl['path']) : ""; // on ne garde que l'url sans le get
if(isset($parseUrl['query'])){
   parse_str($parseUrl['query'], $_GET); // on recrée le GET car il arrive vide
}

/* ==========================================================================
    Check lang
   ========================================================================== */

if ( preg_match( "~^(?'lang'[a-z]{2})(\/(?'uri'.*)?)?$~i", $uri, $params ) ) {
    $toRedirect = false;
    $uri = isset($params['uri']) ? $params['uri'] : "";
    $langue = $params['lang'];
}else{
    $toRedirect = true;

    if(isset($_SESSION['lang']) && $_SESSION['lang'] != '' && strlen($_SESSION['lang']) == 2){
        $langue = $_SESSION['lang'];
    }elseif (isset($_COOKIE['lang']) && $_COOKIE['lang'] != '' && strlen($_COOKIE['lang']) == 2) {
        $langue = $_COOKIE['lang'];
    }
}

if(isset($langue) && in_array($langue, $accepted_lang)){
    $_SESSION['lang'] = $langue;
    setcookie("lang", $langue, time()+60*60*24*300,'/','', $secure, 1);
    if($uri != "splash"&& $uri != "sitemap.xml" && $toRedirect){
        header('Location: ' . generateDomainWithLang($baseRoot, $langue)); 
        exit();
    }
    $domain = generateDomainWithLang($baseRoot, $langue);
}elseif($uri != "splash" && $uri != "sitemap.xml"){
    /* Don't comment next line if we have a Splash-Page */
    // header('Location: ' . $baseRoot . '/splash'); 
    /* Don't comment next line if we don't have a Splash-Page */
    header('Location: ' . $baseRoot . '/' . $default_lang);
    exit();
}else{
    $langue = $default_lang;
}

if($uri == "sitemap.xml"){
    include('sitemap.php');
    exit();
}

/* ==========================================================================
    Inclusion trad
   ========================================================================== */

if(in_array($langue, $accepted_lang)){
    include('lang/'.$langue.'.php');
}else{
    include('lang/'.$default_lang.'.php');
}

/* ==========================================================================
    Url rewriting
   ========================================================================== */

foreach ( $rules[$langue] as $rule => $action ) {
    if ( preg_match( '~^'.$rule.'$~i', $uri, $params ) ) {
        $page = $action;
        break;
    }
}

$_GET = array_merge($_GET,$params);

/* ==========================================================================
    Switch pages
   ========================================================================== */

if(!isset($page) && $uri == ''){
    $page='home';
}elseif(!isset($page)){
    $page='404';
}

include($root . '/include/' . $include_folder . '/pages.php');

include('includes/footer.php');


/* ==========================================================================
    FUNCTION
   ========================================================================== */

function display404()
{
    global $page, $uri, $version, $baseRoot, $domain, $langue, $trad, $accepted_lang, $title_page, $desc_page, $share_img, $userfileRoot, $id_tracker, $analytics_label;
    $section = '404';
    header("HTTP/1.0 404 Not Found"); 
    include('includes/header.php');
    include('pages/404.php');
    include('includes/footer.php');
    exit();
}

function generateDomainWithLang($baseRoot, $langue)
{
    return $baseRoot . "/" . $langue;
}

function is_ssl($server) {
    if (isset($server['HTTPS']) ) {
        if ( 'on' == strtolower($server['HTTPS']) ){
            return true;
        }
        if ( '1' == $server['HTTPS'] ){
            return true;
        }
    } elseif ( isset($server['SERVER_PORT']) && ( '443' == $server['SERVER_PORT'] ) ) {
        return true;
    }
    return false;
}

?>