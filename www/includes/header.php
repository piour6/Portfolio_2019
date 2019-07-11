<!--
                         
  ____ ___  _   _  ____ ___  _   _ 
 / ___) _ \| | | |/ ___) _ \| | | |
( (__| |_| | |_| ( (__| |_| | |_| |
 \____)___/ \____|\____)___/ \____|
                                   
N'hésitez pas à me contacter : henrion.pierre@gmail.com

-->

<!DOCTYPE html>
<html lang="<?php print $langue; ?>-be">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<link rel="canonical" href="<?= $domain; ?>/<?= $uri; ?>"/>

<title><?php print $title_page; ?></title>
<meta name="description" content="<?php print $desc_page; ?>" />
<meta name="author" content="strategie.agency" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="keywords" content="">

<!-- Facebook -->
<meta property="og:title" content="<?php print $title_page; ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php print $baseRoot; ?>/<?= $share_img; ?>" />
<meta property="og:description" content="<?php print $desc_page; ?>" />
<meta property="og:url" content="<?php print $domain."/".$uri; ?>" />

<!-- Twitter -->
<meta name="twitter:title" content="<?php print $title_page; ?>">
<meta name="twitter:description" content="<?php print $desc_page; ?>">

<!-- Google font -->
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?= $id_tracker; ?>');
</script>

<!-- END ANALYTICS -->

</head>
<body class="page_<?php print $page; ?> <?php if(!isset($_SESSION['has_intro']) && $page=="home") print 'has_intro'; ?>" data-langue="<?php print $langue; ?>" data-baseroot="<?php print $baseRoot; ?>" data-domain="<?php print $domain; ?>" data-uri="<?= $uri; ?>" data-analytics="<?= $id_tracker; ?>">

<div class="cursor"></div>
<div class="follower"></div>

<div class="hamburger js_trigger_nav">
  <svg class="hamburger__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="12px">
  <path fill-rule="evenodd" fill="" d="M-0.000,12.000 L-0.000,9.000 L23.000,9.000 L23.000,12.000 L-0.000,12.000 ZM-0.000,-0.000 L23.000,-0.000 L23.000,3.000 L-0.000,3.000 L-0.000,-0.000 Z"></path>
  </svg>
</div>

<header class="header">

  <div class="container">

    <nav class="header__nav">
      <ul>
        <li class="header__nav-item <?php if($page=="home" || $page=="project_detail") print "header__nav-item--active"; ?>"><a href="<?= $domain; ?>">Mes projets</a></li>
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

<div class="header__nav-alt header__nav-alt--mobile">
  <ul>
    <li class="header__nav-alt-item <?php if($page=="home" || $page=="project_detail") print "header__nav-alt-item--active"; ?>""><a href="<?= $domain; ?>">Mes projets</a></li>
    <li class="header__nav-alt-item <?php if($page=="about") print "header__nav-alt-item--active"; ?>""><a href="<?= $domain; ?>/a-propos">À propos de moi</a></li>
    <li class="header__nav-alt-item"><a href="mailto:henrion.pierre@gmail.com">Contact</a></li>
  </ul>  
  <div class="line line--1"></div>   
  <div class="line line--2"></div>   
  <div class="line line--3"></div>   
  <div class="line line--4"></div>   
</div>