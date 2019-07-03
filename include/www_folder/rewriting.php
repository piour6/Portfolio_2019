<?php

$rules["fr"] = array( 
    "accueil" => 'home',
    "404" => '404', 
    "a-propos" => 'about', 
    "recettes/(?'id'[-_0-9]*)/(?'name'[-_a-z0-9]*)" => 'recipe', 
    "produits/(?'id'[-_0-9]*)/(?'name'[-_a-z0-9]*)" => 'product',
);

$rules["nl"] = array( 
    "onthaal" => 'home',
    "404" => '404', 
    "over-ons" => 'about', 
    "recepten/(?'id'[-_0-9]*)/(?'name'[-_a-z0-9]*)" => 'recipe',
    "producten/(?'id'[-_0-9]*)/(?'name'[-_a-z0-9]*)" => 'product',
);

?>