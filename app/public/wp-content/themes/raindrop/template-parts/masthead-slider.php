<?php
/* 
Template Part: Masthead Slider 
*/
?>

<?php $uid_slider = rand(0,100000); ?>

<div id="carousel-<?php echo $uid_slider ?>" class="carousel slide" data-ride="carousel" data-interval="10000" data-pause="false">
  <div class="carousel-inner" role="listbox">
    <?php 
    if( have_rows('single_slide') ): 
      $counter = 0;
    while( have_rows('single_slide') ): the_row();
    if ($counter == 0) {
      echo '<div class="item active">'; 
    } else {
      echo '<div class="item">';
    }
    ?>

    <?php $image = get_sub_field('slider_image'); ?>
    <div class="slide-image" style="background-image: url(<?php echo $image['url'] ?>);" title="<?php echo $image['alt'] ?>"></div>

    <div class="slide-caption">
      <div class="slide-caption-inner-wrapper">
      <div class="slide-caption-inner">
      <h2><?php the_sub_field('slider_title'); ?></h2>
      <p><?php the_sub_field('slider_caption'); ?></p>

      <div class="slide-caption-btns">
        <a href="<?php the_sub_field('slider_button_url'); ?>"><button class="rd-btn"><?php the_sub_field('slider_button_text'); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></a>
      </div>
      </div>
      <?php if (get_sub_field('slider_art')) { ?>
      <div class="slide-caption-art">
        <img src="<?php the_sub_field('slider_art'); ?>" alt=" " />
      </div>
      <?php } ?>
      </div>

    </div>

    <?php 
    echo '</div>';
    $counter++; 
    endwhile; 
    endif; 
    ?>
    
  </div>

  <div class="slider-controls">
    <a class="slide-control-left" href="#carousel-<?php echo $uid_slider ?>" role="button" data-slide="prev">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/SEAC/slider-arrow-left.png" alt="Left Button Navigation for the Main Slider">
    </a>
    <a class="slide-control-right" href="#carousel-<?php echo $uid_slider ?>" role="button" data-slide="next">
      <img src="<?php echo get_template_directory_uri(); ?>/library/images/SEAC/slider-arrow-right.png" alt="Right Button Navigation for the Main Slider">
    </a>
  </div>

</div>