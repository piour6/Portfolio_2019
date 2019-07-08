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

$id_tracker = "UA-143458033-1";

/* ==========================================================================
    URL INFO
   ========================================================================== */

/* - LOCAL ------------------------------------------------------------------ */

$configDomain['intra']['url'] = "pierre";
$configDomain['intra']['default_lang'] = "fr";
$configDomain['intra']['accepted_lang'] = ["fr"];
$configDomain['intra']['include_folder'] = "www_folder";

/* - PREVIEW ----------------------------------------------------------------- */

$configDomain['preview']['url'] = "preview.pierre-henrion.be";
$configDomain['preview']['secure'] = true; //optional if false
$configDomain['preview']['www'] = false; //optional if false
$configDomain['preview']['default_lang'] = "fr";
$configDomain['preview']['accepted_lang'] = ["fr"];
$configDomain['preview']['include_folder'] = "www_folder";

/* - ONLINE ----------------------------------------------------------------- */

$configDomain['online']['url'] = "pierre-henrion.be";
$configDomain['online']['secure'] = true; //optional if false
$configDomain['online']['www'] = false; //optional if false
$configDomain['online']['default_lang'] = "fr";
$configDomain['online']['accepted_lang'] = ["fr"];
$configDomain['online']['include_folder'] = "www_folder";

?>