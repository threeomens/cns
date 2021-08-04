<div id="featured-resources" class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1><?php the_sub_field('blog_posts_title'); ?></h1>
    </div>

  </div>
  <?php
  $counter = 0;
  $args = array('post_type' => 'post', 'posts_per_page' => 3, 'orderby'=> 'date', 'order' => 'DESC');
  $query = new WP_Query($args);

  while($query -> have_posts()) : $query -> the_post(); ?>

  <?php if ($counter % 3 == 0 ) { ?>
    <?php if ($counter !== 0 ) { ?>
    </div>
    <?php } ?>
    <div class="row">
      <?php } ?>

      <div class="resource-pod col-sm-4">
        <div class="resource-thumbnail-wrapper">
          <?php if ( has_post_thumbnail() ) { ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
            <div class="featured-img-blog" style="background-image: url('<?php echo $image[0]; ?>')">
            </div>
            <?php } // end if ?>
          </div>
          <div class="resource-pod-content">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>

        <?php $counter++; endwhile; ?>
        <?php if ($counter % 4 !== 0 ) { ?>
        </div>
        <?php } ?>    

  <?php wp_reset_query(); ?>
    <div class="row blog-posts-footer">
      <a href="<?php the_sub_field('section_button_url'); ?>"><button class="rd-btn"><?php the_sub_field('section_button_text'); ?>  <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button></a>
    </div>
      </div>


    </div>
