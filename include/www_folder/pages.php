<?php

$title_page = "";
$desc_page = "";

switch ($page){

    // home          
    case 'home':
        $title_page = "Pierre Henrion — Creative front-end developer";
        $desc_page = "";
        $section='home';
        $analytics_label = "Homepage";
        include('includes/header.php');
        include('pages/home.php');
        break;

    // about          
    case 'about':
        $title_page = "Pierre Henrion — Creative front-end developer";
        $desc_page = "";
        $section='about';
        $analytics_label = "About";
        include('includes/header.php');
        include('pages/about.php');
        break;

    // 404
    case '404':
    default:
        display404();                     
}

?>