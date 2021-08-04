<?php
/*
Template Name: Page - Right Sidebar
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/inner-masthead') ?>

<div class="container">

  <div id="content" class="clearfix row">

    <div id="main" class="col-md-8 clearfix" role="main">

      <?php get_template_part( 'breadcrumb' ); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


          <section class="page-content entry-content clearfix" itemprop="articleBody">
            <?php the_content(); ?>
            
          </section> <!-- end article section -->


          <footer>

            <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ', ', '</p>'); ?>

          </footer> <!-- end article footer -->

        </article> <!-- end article -->

      <?php endwhile; ?>    

    <?php else : ?>

      <article id="post-not-found">
        <header>
          <h1><?php _e("Not Found", "bonestheme"); ?></h1>
        </header>
        <section class="post_content">
          <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
        </section>
        <footer>
        </footer>
      </article>

    <?php endif; ?>

  </div> <!-- end #main -->

  <?php get_sidebar(); ?>

</div> <!-- end #content -->

</div> <!-- end .container -->

</div>


          <?php $the_query = new WP_Query( 'page_id=8' );
          while ( $the_query->have_posts() ) :
            $the_query->the_post();

            if( have_rows('homepage_elements') ):

                while ( have_rows('homepage_elements') ) : the_row();

                    if( get_row_layout() == 'call_to_action' ) {


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

   <?php if ($cta_style == 'infographic') { ?>

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

 <?php } ?>
                    <?php } 

                endwhile;

            endif;              
          endwhile;
          wp_reset_postdata();
           ?>

<?php get_footer(); ?>
