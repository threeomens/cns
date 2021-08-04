<?php
/* 
Template Part: Info Boxes
*/
?>

<?php 

  $uid = rand(0,100000);

  $cta_bg_image = get_sub_field('cta_background_image');
  $cta_bg_color = get_sub_field('cta_background_color');   
  $cta_font_text = get_sub_field('cta_font_color'); 

?>

<style>

.main-cta-home-<?php echo $uid ?> h3, .main-cta-home-<?php echo $uid ?> p, .main-cta-home-<?php echo $uid ?> button {
  color: <?php echo $cta_font_text ?>;
}

.main-cta-home-<?php echo $uid ?> {
  background-image: url('<?php echo $cta_bg_image['url'] ?>');
  background-color: <?php echo $cta_bg_color ?>;
}

</style>

<div class="main-cta wrapper main-cta-home main-cta-home-<?php echo $uid ?>">

  <div class="container">
    <div class="row main-cta-row">

  <?php if( have_rows('single_cta') ): 
    $row_count = 0;
    while( have_rows('single_cta') ): the_row(); $row_count++;  endwhile; ?>

    <?php switch ($row_count) {
      case '1':
        $count_column = 'col-md-12';
        break;
      case '2':
        $count_column = 'col-md-6';
        break;  
      case '3':
        $count_column = 'col-md-4';
        break;
      case '4':
        $count_column = 'col-md-3';
        break;
      case '5':
        $count_column = 'col-md-2';
        break;
      case '6':
        $count_column = 'col-md-2';
        break;                  
      default:
        $count_column = 'col-md-12';
        break;
    } ?>

    <?php while( have_rows('single_cta') ): the_row(); ?>


    <div class="<?php echo $count_column ?>">
      <?php $icon = get_sub_field('cta_icon'); ?>
      <img src="<?php echo $icon['url']; ?>" alt="">
      <h3><?php the_sub_field('cta_title'); ?></h3>
      <p><?php the_sub_field('cta_description'); ?></p>
      <a href="<?php the_sub_field('cta_button_url'); ?>">
        <button class="rd-btn rd-btn-secondary"><?php the_sub_field('cta_button_text'); ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </a>
    </div>

    <?php 
      endwhile; endif; 
    ?>


    </div>
  </div>
</div>