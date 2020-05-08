<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div class="main-wrapper">
<nav>
    <?php // wp_nav_menu('main'); ?>
</nav>
<div class="content-grid">

<div id="header-container">
    <div id="search">
        <?php echo do_shortcode('[smart_search id="1"]'); ?>
    </div>
   
    
    <div id="header-box_two"><a href="#">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo(); } ?>
        </a>
    </div>

    <div id="header-box_three">

        <div id="account">
        <?php wp_nav_menu(
        array(
        'theme_location' => 'Account'
        )
        ); ?>
        </div>

        
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
        'theme_location' => 'Checkout'
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
    <div id="categories-subpage">
    <?php wp_nav_menu(
        array(
        'theme_location' => 'SubPages'
        )
        ); ?>
    </div>
 </div>
