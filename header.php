<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
  <title>Coachtechさん最終課題 やり直し１回目</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <h1 class="header-title"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header-logo" src="<?php echo get_theme_file_uri("img/headerlogo.png"); ?>" alt=""></a></h1>
    <nav class="header-nav">
      <ul class="header-nav-list">
        <li class="header-nav-list-item"><a href="about.html">About</a></li>
        <li class="header-nav-list-item"><a href="service.html">Service</a></li>
        <li class="header-nav-list-item"><a href="news.html">News</a></li>
        <li class="header-nav-list-item"><a href="recruit.html">Recruit</a></li>
        <li class="header-nav-list-item"><a href="contact.html">Contact</a></li>
        <li class="header-nav-list-item"><a href="privacy.html">Privacy</a></li>
      </ul>
    </nav>
  </header>
  <header class="header-sp">
    <h1 class="header-sp-title"><a href="<?php echo esc_url(home_url('/')); ?>"><img class="header-logo" src="<?php echo get_theme_file_uri("img/headerlogo.png"); ?>" alt=""></a></h1>
    <div class="header-sp-menu" id="menu">
      <span class="header-sp-menu-line-top"></span>
      <span class="header-sp-menu-line-middle"></span>
      <span class="header-sp-menu-line-bottom"></span>
    </div>
    <nav class="header-sp-nav" id="nav">
      <ul class="header-sp-nav-list">
        <li class="header-sp-nav-list-item"><a href="<?php echo esc_url(home_url('/')); ?>">トップへ</a></li>
        <li class="header-sp-nav-list-item"><a href="about.html">About</a></li>
        <li class="header-sp-nav-list-item"><a href="service.html">Service</a></li>
        <li class="header-sp-nav-list-item"><a href="recruit.html">Recruit</a></li>
        <li class="header-sp-nav-list-item"><a href="contact.html">Contact</a></li>
        <li class="header-sp-nav-list-item"><a href="privacy.html">Privacy</a></li>
      </ul>
    </nav>
  </header>