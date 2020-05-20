<?php 
/* 
Template Name: Registration Template
*/


get_header( 'registration' );

?>

<div id="registration">
<div id="registration-heading"><h1>Here you can register your new site</h1></div>
<?php echo do_shortcode('[forminator_form id="5"]'); ?>
</div>

<?php get_footer( 'registration' ); ?>