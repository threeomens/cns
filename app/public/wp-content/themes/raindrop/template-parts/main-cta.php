<?php
/* 
Template Part: Main CTA
*/
?>

<?php 

  $uid = rand(0,100000);

  $cta_style = strtolower(get_sub_field('cta_style'));
  $cta_bg_image = get_sub_field('cta_background_image');
  $cta_bg_color = get_sub_field('cta_background_color');   
  $cta_font_text = get_sub_field('cta_font_color'); 
  $cta_section_title = get_sub_field('cta_section_title'); 
  $cta_main_btn_text = get_sub_field('cta_section_main_button_text'); 
  $cta_main_btn_link = get_sub_field('cta_section_main_button_link'); 

?>

<style>

.main-cta-home-<?php echo $uid ?> h2, .main-cta-home-<?php echo $uid ?> h3, .main-cta-home-<?php echo $uid ?> p, .main-cta-home-<?php echo $uid ?> button {
  color: <?php echo $cta_font_text ?>;
}

.main-cta-home-<?php echo $uid ?> {
  background-image: url('<?php echo $cta_bg_image['url'] ?>');
  background-color: <?php echo $cta_bg_color ?>;
  background-position: center;
}

.cta-header {
  margin-bottom: 40px;
}

.cta-footer {
  margin-top: 40px;
}

.cta-header h2 {
  margin: 0;
}

.cta-style-infographic .cta-single {
    padding: 20px 0;
    border: 2px solid #fff;
}

.cta-style-infographic .cta-single {
    padding: 20px 0;
    border: 2px solid #fff;
    min-height: 250px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
        -ms-flex-align: center;
            align-items: center;
    margin: 0px 10px;
}

.cta-style-infographic .cta-single-inner * {
    margin: 0;
}

.cta-style-infographic .cta-single-inner h3 {
    text-transform: lowercase;
}

.cta-style-infographic .cta-single-inner p {
  font-family: 'Exo 2';
  font-weight: 400;
}

</style>

<div class="main-cta wrapper main-cta-home main-cta-home-<?php echo $uid ?> cta-style-<?php echo $cta_style ?>">
  <div class="container">
      <div class="cta-section">
      <?php if ($cta_section_title) { ?>
        <div class="row cta-header">
          <h2><?php echo $cta_section_title ?></h2>
        </div>
      <?php } ?>
      <div class="row cta-content">
  <?php if( have_rows('single_cta') ): ?>
    
  <?php // Checking how many CTA boxes we have
  $row_count = 0; while( have_rows('single_cta') ): the_row(); $row_count++; endwhile; ?>

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

    <?php
    $cta_button_url = get_sub_field('cta_button_url');
    $cta_button_text = get_sub_field('cta_button_text');
    ?>

    <?php if ($cta_style == 'standard') { ?>

    <div class="<?php echo $count_column ?>">
        <div class="cta-single">
          <div class="cta-single-inner">
        <?php $icon = get_sub_field('cta_icon'); ?>
        <img src="<?php echo $icon['url']; ?>" alt="">
        <h3><?php the_sub_field('cta_title'); ?></h3>
        <p><?php the_sub_field('cta_description'); ?></p>

        
        <?php if ($cta_button_url && $cta_button_text) { ?>
        <a href="<?php echo $cta_button_url ?>">
          <button class="rd-btn rd-btn-secondary"><?php echo $cta_button_text ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
        </a>
        <?php } ?>
        </div>
      </div>
    </div>

    <?php } elseif ($cta_style == 'infographic') { ?>

    <div class="<?php echo $count_column ?>">

      <?php if ($cta_button_url) { ?> 
      <a href="<?php echo $cta_button_url ?>">
      <?php } ?>
        <div class="cta-single">
          <div class="cta-single-inner">
            <p><?php the_sub_field('cta_title'); ?></p>
            <h3><?php the_sub_field('cta_description'); ?></h3>
          </div>
        </div>
      <?php if ($cta_button_url) { ?> 
      </a>
      <?php } ?>
    </div>

    <?php } ?>

    <?php endwhile; endif; ?>
    </div>


    <?php if ($cta_main_btn_text && $cta_main_btn_link) { ?>
    <div class="cta-footer row">
      <a href="<?php echo $cta_main_btn_link ?>"><button class="rd-btn"><?php echo $cta_main_btn_text ?> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></a>
    </div>
    <?php } ?>

    </div>
  </div>
</div>