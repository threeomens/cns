<?php 

if (is_home()) {
	$blog_id = get_current_blog_id();
	$masthead_bg = get_field('masthead_image', $blog_id);
} else {
	$masthead_bg = get_field('masthead_image');
}

$count = count( get_sub_field( 'fallback_masthead_images', 'option' ) );
$color = get_field("masthead_color_filter");
$rgba = hex2rgba($color, 0.7);
?>

<?php if ($masthead_bg) { ?> 
<div class="inner-masthead" style="background-image: url('<?php echo $masthead_bg ?>');">
<?php } else {

$i = 0;
$fallbackphotos = [];

if( get_field('fallback_masthead_images','option') ):
	while( has_sub_field('fallback_masthead_images', 'option') ):
		$fallbackphotos[$i] = get_sub_field('fallback_image', 'option');
		$i++;
	endwhile;
endif;
$i = $i - 1;
$roll = rand(0, $i); ?>


<div class="inner-masthead" style="background-image: url('<?php echo $fallbackphotos[$roll]; ?>');">
 <?php } ?>



<?php if ($color) { ?>
<div class="color-filter" style="background-color: <?php echo $rgba ?>">
<?php } ?>


  <div class="inner-masthead-caption">

<?php if (is_home()) { ?>
	<h1>News</h1>
<?php } else { ?>
    <h1><?php the_title(); ?></h1>
<?php } ?>


<?php if ($color) { ?>
  </div>
<?php } ?>


</div>  

</div>