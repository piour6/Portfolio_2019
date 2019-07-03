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

    // 404
    case '404':
    default:
        display404();                     
}

?>