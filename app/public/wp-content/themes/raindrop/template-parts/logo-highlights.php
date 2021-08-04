<?php /*
* Template Part: Logo Highlights
*/ ?>
<?php 
$section_title = get_sub_field('section_title');
$section_background_color = get_sub_field('section_background_color');
$section_font_color = get_sub_field('section_font_color');
?>

<div class="wrapper logo-highlight-slider">
	<div class="container">
		<div class="logo-highlight-header">
			<h2><?php echo $section_title ?></h2>
		</div>
		<div class="logo-highlight-body">
			<div class="logo-slider-inner">
				<div class="logo-slide-single-wrapper">
				    <?php if( have_rows('logo_single') ): 
				    while( have_rows('logo_single') ): the_row();
				    $logo_img = get_sub_field('logo_image'); ?>
						<div class="logo-slide-single" title="<?php echo $logo_img['alt']; ?>" style="background-image:url('<?php echo $logo_img['url']; ?>');"></div>	
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="logo-slider-controls">
				<div class="logo-slider-control logo-slider-control-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
				<div class="logo-slider-control logo-slider-control-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
			</div>
		</div>
		<div class="logo-highlight-footer">
			<a href="<?php the_sub_field('section_button_url'); ?>"><button class="rd-btn"><?php the_sub_field('section_button_text'); ?>  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></a>
		</div>
	</div>
</div>

<style>
	
	/* Wrapper */
	.logo-highlight-slider {
		padding: 60px 0;
		background-color: <?php echo $section_background_color ?>;
		color: <?php echo $section_font_color ?>;
	}

	/* Header */
	.logo-highlight-header {
		text-align: center;
	}

	.logo-highlight-header h2 {
		margin: 0;
	}

	/* Slider */

	.logo-highlight-body {
		position: relative;
		margin: 70px 0;
	}

	.logo-slider-inner {
	    width: 1000px;
	    margin: 0 auto;
	    position: relative;
	    overflow: hidden;
	}

	.logo-slider-inner * {
	    display: inline-block;
	    line-height: 0;
	}

	.logo-slide-single-wrapper, .logo-slider-inner, .logo-slider-single {
		line-height: 0;
	}

	.logo-slide-single-wrapper { /* Animating element */
		overflow: hidden;
		width: 99999px;
		transform: translateX(0px);
    	transition: 0.6s;
	}

	.logo-slide-single {
		height: 100px;
		width: 200px;
		float: left;
		background-size: contain;
	    background-position: center center;
	    background-repeat: no-repeat;
	}

	/* Controls */

	.logo-slider-control {
		position: absolute;
		cursor: pointer;
	}

	.logo-slider-control i {
    	font-size: 34px;
	}

	.logo-slider-control.logo-slider-control-left {
		top: 40px;
		left: 0;
	}

	.logo-slider-control.logo-slider-control-right {
		top: 40px;
		right: 0px;
	}

	/* Footer */

	.logo-highlight-footer {
	    text-align: center;
	}

	.logo-highlight-footer button {
		background-color: <?php echo $section_font_color ?>;
		color: #fff;
	}

	@media (max-width: 1199px) {
		.logo-slider-inner {
			width: 800px;
		}
	}

	@media (max-width: 992px) {
		.logo-slider-inner {
			width: 600px;
		}
	}

	@media (max-width: 768px) {
		.logo-slider-inner {
			width: 400px;
		}
	}

	@media (max-width: 521px) {
		.logo-slider-inner {
			width: 200px;
		}
	}	

</style>

<script>

	var slider_value = 0;
	var slider_moving = false;
	var logo_count = jQuery('.logo-slide-single-wrapper').children().length;
	var logo_width = 200;
	var logo_wrapper_width = 1000;
	var delay_ms = 600;

	var slider_limit = logo_count * logo_width - logo_wrapper_width;
	slider_limit = slider_limit * -1;

	jQuery(".logo-slider-control-left").click(function(){
		if (slider_value < 0 && slider_moving == false) {
			slider_moving = true;
			slider_value = slider_value + logo_width;
			jQuery(".logo-slide-single-wrapper").css('transform', 'translateX('+ slider_value +'px)');
			setTimeout(function() {
        		slider_moving = false;
    		}, delay_ms);
		}
	});

	jQuery(".logo-slider-control-right").click(function(){
		if (slider_value > slider_limit && slider_moving == false) {
			slider_moving = true;
			slider_value = slider_value - logo_width;
			jQuery(".logo-slide-single-wrapper").css('transform', 'translateX('+ slider_value +'px)');
			setTimeout(function() {
        		slider_moving = false;
    		}, delay_ms);
		}
	});


</script>