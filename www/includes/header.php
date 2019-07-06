<!--
                         
  ____ ___  _   _  ____ ___  _   _ 
 / ___) _ \| | | |/ ___) _ \| | | |
( (__| |_| | |_| ( (__| |_| | |_| |
 \____)___/ \____|\____)___/ \____|
                                   

-->

<!DOCTYPE html>
<html lang="<?php print $langue; ?>-be">
<head>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />

<title><?php print $title_page; ?></title>
<meta name="description" content="<?php print $desc_page; ?>" />
<meta name="author" content="strategie.agency" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="keywords" content="">

<meta property="og:title" content="<?php print $title_page; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php print $baseRoot; ?>/<?= $share_img; ?>" />
<meta property="og:description" content="<?php print $desc_page; ?>" />
<meta property="og:url" content="<?php print $domain."/".$uri; ?>" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">

<link href="<?= $baseRoot; ?>/dist/css/style.min.css?v=<?= $version; ?>" rel="stylesheet" type="text/css"/>

<link rel="shortcut icon" href="<?= $baseRoot; ?>/favicon.png" type="image/x-icon" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
   if (!window.jQuery) {
      document.write('<script src="<?= $baseRoot; ?>/vendors/jquery-3.3.1.min.js"><\/script>');
   }
</script>

<!-- ANALYTICS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $id_tracker; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', '<?= $id_tracker; ?>', {
        'page_title' : '<?= addslashes($analytics_label); ?>', 'dimension1' : '<?= strtoupper($langue); ?>'
    });
</script>
<!-- END ANALYTICS -->

</head>
<body class="page_<?php print $page; ?> <?php if(!isset($_SESSION['has_intro']) && $page=="home") print 'has_intro'; ?>" data-langue="<?php print $langue; ?>" data-baseroot="<?php print $baseRoot; ?>" data-domain="<?php print $domain; ?>" data-uri="<?= $uri; ?>" data-analytics="<?= $id_tracker; ?>">

<div class="cursor"></div>
<div class="follower"></div>

<header class="header">

  <div class="container">

    <nav class="header__nav">
      <ul>
        <li class="header__nav-item <?php if($page=="home") print "header__nav-item--active"; ?>"><a href="<?= $domain; ?>">Mes projets</a></li>
        <li class="header__nav-item <?php if($page=="about") print "header__nav-item--active"; ?>"><a href="<?= $domain; ?>/a-propos">À propos de moi</a></li>
      </ul>
    </nav>

    <a href="<?= $domain; ?>" class="logo">
      <img class="logo__picto" src="<?= $baseRoot; ?>/graphics/storm.png" />
      <h1 class="logo__title">Pierre Henrion</h1>
      <h2 class="logo__subtitle">Front-end <div class="logo__subtitle-nodesk">developer <span>&</span> UI/UX</div> designer</h2>
    </a>

    <div class="header__contact">
      <a href="mailto:henrion.pierre@gmail.com">Contact</a>
    </div>

  </div>

</header>