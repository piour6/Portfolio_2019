<?php

$rules["fr"] = array( 
    "accueil" => 'home',
    "404" => '404', 
    "a-propos" => 'about',
    "projets/(?'id'[-_0-9]*)/(?'name'[-_a-z0-9]*)" => 'project_detail'
);

?>