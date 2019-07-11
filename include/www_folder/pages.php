<?php

$title_page = "";
$desc_page = "Véritable ninja des internets orienté solution.";

switch ($page){

    // home          
    case 'home':
        $title_page = "Pierre Henrion — Développeur front-end & UI/UX designer";
        $section='home';
        $analytics_label = "Homepage";
        include('includes/header.php');
        include('pages/home.php');
        break;

    // about          
    case 'about':
        $title_page = "À propos de moi — Pierre Henrion";
        $section='about';
        $analytics_label = "About";
        include('includes/header.php');
        include('pages/about.php');
        break;

    // about          
    case 'project_detail':
        $accepted_ids = ["1","2","3","4","5"];
        $accepted_ids_length = count($accepted_ids);
        if(isset($_GET['id']) && in_array($_GET['id'], $accepted_ids)){
            $id = $_GET['id'];
            if($id==$accepted_ids_length){
                $next_id = 1;
            } else {
                $next_id = $id + 1;
            }
            if($id==1){
                $prev_id = $accepted_ids_length;
            } else {
                $prev_id = $id - 1;
            }
        } else {
            display404();
        }
        $title_page = $trad['projet'.$id.'_title']." — Projets — Pierre Henrion";
        $section='about';
        $analytics_label = "Project";
        include('includes/header.php');
        include('pages/project_detail.php');
        break;

    // 404
    case '404':
    default:
        display404();                     
}

?>