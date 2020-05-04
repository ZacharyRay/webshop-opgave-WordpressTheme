<?php 
/* 
Template Name: Registration Template
*/
get_header();
?>


<div id="registration">
<?php echo do_shortcode('[forminator_form id="5"]'); ?>
</div>

<?php echo do_shortcode('[wp_paypal button="subscribe" name="My product" amount="1.00" recurrence="1" period="M" src="1"
return="http://hovedopgave.kinsta.cloud/"]'); ?>



<?php get_footer(); ?>