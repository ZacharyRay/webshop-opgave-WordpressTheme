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
    <div id="header-box_one"></div>
    <div id="header-box_two"></div>

    <div id="header-box_three">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div id="categories-container">
    <div id="categories-categories">
        <a href="#">kategorier</a>
        <a href="#">kategorier</a>
        <a href="#">kategorier</a>
        <a href="#">kategorier</a>
        <a href="#">kategorier</a>
    </div>
    <div id="categories-subpage">
        <a href="#">undersider</a>
        <a href="#">undersider</a>
        <a href="#">undersider</a>
        <a href="#">undersider</a>
    </div>

</div>
