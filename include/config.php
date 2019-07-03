<?php 
$root = dirname(__DIR__);

/* ==========================================================================
    DEFAULT - SEO
   ========================================================================== */

$analytics_label = "";
$share_img = "share.png";

/* ==========================================================================
    ANALYTICS
   ========================================================================== */

$id_tracker = "";

/* ==========================================================================
    URL INFO
   ========================================================================== */

/* - INTRA ------------------------------------------------------------------ */

$configDomain['intra']['url'] = "intraxial/pierre_test/sass/project/www";
$configDomain['intra']['default_lang'] = "fr";
$configDomain['intra']['accepted_lang'] = ["fr"];
$configDomain['intra']['include_folder'] = "www_folder";

/* - ONLINE ----------------------------------------------------------------- */

$configDomain['online']['url'] = "pierre-henrion.be";
$configDomain['online']['secure'] = true; //optional if false
$configDomain['online']['www'] = false; //optional if false
$configDomain['online']['default_lang'] = "fr";
$configDomain['online']['accepted_lang'] = ["fr"];
$configDomain['online']['include_folder'] = "www_folder";

?>