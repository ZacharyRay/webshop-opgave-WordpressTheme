<?php 
$id = get_queried_object_id();
// $product = get_field('product', $id);
$product_selector = get_field('display', $id);

?>

<?php foreach($product_selector as $product_id) {

// $product_image = get_field('product', $product_id);
$product_is = get_post($product_id);
$featured_image = get_the_post_thumbnail_url($product_id);

 ?>


<div style="background-image: url('<?= $featured_image ?>')"></div>
<?php echo '<pre>' . print_r($product_image, true) . '</pre>'; ?>
<?php } ?>