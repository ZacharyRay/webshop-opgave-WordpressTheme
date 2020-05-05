<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
<nav>
    <?php // wp_nav_menu('main'); ?>
</nav>
<div class="content-grid">

<div id="header-container">
    <div id="header-box_one">
        <div></div>
        <input type="text" placeholder="Search Here...">
        <button></button>
    </div>
    <div id="header-box_two"><a href="#"><img src="http://localhost/hovedopgave/wp-content/uploads/2020/05/logo.png" alt=""></a></div>

    <div id="header-box_three">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div id="categories-container">
    <div id="categories-categories">
        <a href="#">Kategorier</a>
        <a href="#">Kategorier</a>
        <a href="#">Kategorier</a>
        <a href="#">Kategorier</a>
        <a href="#">Kategorier</a>
    </div>
    <div id="categories-subpage">
        <a href="#">Undersider</a>
        <a href="#">Undersider</a>
        <a href="#">Undersider</a>
        <a href="#">Undersider</a>
    </div>

</div>
