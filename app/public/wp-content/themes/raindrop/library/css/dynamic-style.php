<?php 

$primary_color = get_field('primary_color', 'option'); 
$secondary_color = get_field('secondary_color', 'option'); 

$primary_color_font = get_field('primary_color_font', 'option');
$secondary_color_font = get_field('secondary_color_font', 'option');

?>

<style type="text/css">

button.rd-btn-secondary {
	border-color: <?php echo $secondary_color ?>;
	color: <?php echo $secondary_color ?>;
}

.nav-top-right button, .slide-caption-btns button {
	border-color: <?php echo $secondary_color ?>;
}

.nav-top-right button.btn-inverse {
	background-color: <?php echo $secondary_color ?>;
	color: <?php echo $secondary_color_font ?>;
}

</style>