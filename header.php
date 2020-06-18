<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="5e8f28a9-7008-42f0-9cd0-b8c7eb3c220d" data-blockingmode="auto" type="text/javascript"></script>
    <title><?= bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
<nav>
    <?php // wp_nav_menu('main'); ?>
</nav>
<div class="content-grid">

<?php 
$options = get_fields('options'); ?>
<?php foreach($options as $option_fields){ ?>
<div id="header-container" style="background-color: <?= $option_fields['color_on_header_and_footer'] ?>;">
<?php } ?>

    <div id="header-box_one">
    <?php foreach($options as $option_fields){ ?>
        <div style="background-color: <?= $option_fields['color_on_header_and_footer'] ?>;"></div>
        <input type="text" placeholder="Search Here..." style="background-color: <?= $option_fields['color_on_header_and_footer'] ?>;">
        <button style="background-image: url('http://clone.hovedopgave.kinsta.cloud/wp-content/uploads/sites/17/2020/05/search.png'); background-color: <?= $option_fields['color_on_header_and_footer'] ?>;"></button>
        <?php } ?>
    </div>

    <div id="header-box_one-burgermenu">
        <div id="menuToggle">
            <input type="checkbox">

            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <div>
                    <h2>Menu</h2>
                </div>
                
                    <?php wp_nav_menu(
                array(
                'theme_location' => 'MainMenu'
                )
                ); ?>
                            <?php wp_nav_menu(
                array(
                'theme_location' => 'SubPages'
                )
                ); ?>
            </ul>
        </div>
    </div>
   
    
    <div id="header-box_two"><a href="#">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo(); } ?>
        </a>
    </div>

    <div id="header-box_three">
        
        <div id="favorites">
        <?php wp_nav_menu(
        array(
        'theme_location' => 'Favorites'
        )
        ); ?>
        </div>


        <div id="checkout">
        <?php wp_nav_menu(
        array(
        'theme_location' => 'Cart'
        )
        ); ?>
        </div>

    </div>
</div>

<!-- Menu -->


<div id="categories-container">
    <div id="categories-categories">
        <?php wp_nav_menu(
        array(
        'theme_location' => 'MainMenu'
        )
        ); ?>
    </div>
    <div id="header-box_one-mobile">
        <div></div>
        <input type="text" placeholder="Search Here...">
        <button style="background-image: url('http://clone.hovedopgave.kinsta.cloud/wp-content/uploads/sites/17/2020/05/search.png')"></button>
    </div>
 </div>
