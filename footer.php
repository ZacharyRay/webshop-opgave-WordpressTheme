</div>
</div>
<?php
$options = get_fields('options');
wp_footer(); 
?>
<?php 
$options = get_fields('options'); ?>
<?php foreach($options as $option_fields){ ?>
<div id="footer-container" style="background-color: <?= $option_fields['color_on_header_and_footer'] ?>;">
<?php } ?>
    <?php foreach($options as $option_fields){
        ?>
    <div id="contact">
        <h2>Contact</h2>
        <p id="location">
        <?= $option_fields['company_name']; ?>
        <br>
        <?= $option_fields['company_address'] ?> <br>
        <?= $option_fields['company_zip'] ?>
        </p>
        <p id="contact-information"> 
        <a href="mailto:<?= $option_fields['company_email']; ?>">
        <?= $option_fields['company_email'] ?>
        </a> 
         <br>
        <a href="tel:<?= $option_fields['company_phone'] ?>"><?= $option_fields['company_phone'] ?></a>
        </p>
        <div id="social-media">
            <?php foreach($option_fields['social_media'] as $social){ ?>
                <a href="<?= $social['link'] ?>">
                    <div id="some-image" style="background-image: url('<?= $social['image'] ?>')"></div>
                    <div id="some"><?= $social['platform']; ?></div>
                </a>
            <?php } ?>
        </div>
    </div>
    <div id="brands">
        <h2>Brands</h2>
        <div id="categories-categories">
        <?php wp_nav_menu(
        array(
        'theme_location' => 'MainMenu'
        )
        ); ?>
    </div>
    </div>
    <div id="customer-service">
        <h2>Costumer Service </h2>
        <?php wp_nav_menu(
            array(
            'theme_location' => 'FooterMenu'
            )
            ); ?>
    </div>
    <div id="mailchimp">
            <!-- Mailchimp embedded newsletter service -->
            <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <?php foreach($options as $option_fields){ ?>
        <div id="mc_embed_signup" style="background-color: <?= $option_fields['color_on_header_and_footer'] ?>!important;">
        <?php } ?>
            <form action="<?= $option_fields['mailchimp']; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2>Subscribe</h2>

                    <div class="mc-field-group">
                        <label for="mce-FNAME">Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address</label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_de63a0de010c3461bd5d6bddb_c709eac16c" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>
    <?php } ?>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
    </div>
</div>
</body>
</html>