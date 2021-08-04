<?php get_header(); ?>


    <div class="container">

      <div id="content" class="row clearfix">

            <div id="main" class="col-md-8 clearfix" role="main">

              <h1 class="page-title"><span><?php _e("Search Results for","bonestheme"); ?>:</span> <?php echo esc_attr(get_search_query()); ?></h1>

              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

                <header class="article-header">
                  <div class="titlewrap clearfix">
                    <h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p class="byline vcard">
                      <time class="updated" datetime="<?php get_the_time('Y-m-j') ?>"><?php echo get_the_time(get_option('date_format')) ?></time>
                      <span class="sticky-ind pull-right"><i class="fa fa-star"></i></span>
                    </p>
                  </div>

                </header> <?php // end article header ?>


                <section class="entry-content clearfix">
                  <?php the_excerpt('<span class="read-more">' . __("Read more on","bonestheme") . ' "'.the_title('', '', false).'" &raquo;</span>'); ?>
                </section> <?php // end article section ?>

                <footer class="article-footer clearfix">
 
                      </footer> <?php // end article footer ?>

                <?php // comments_template(); // uncomment if you want to use them ?>

              </article> <?php // end article ?>

              <?php endwhile; ?>


                  <?php if (function_exists("emm_paginate")) { ?>
                      <?php emm_paginate(); ?>
                  <?php } else { ?>
                      <nav class="wp-prev-next">
                          <ul class="clearfix">
                            <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                            <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
                          </ul>
                      </nav>
                  <?php } ?>

              <?php else : ?>

                  <article id="post-not-found" class="hentry clearfix">
                      <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                      <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>


              <?php endif; ?>

            </div> <?php // end #main ?>


            <?php get_sidebar(); ?>


      </div> <?php // end #content ?>

    </div> <!-- end ./container -->

<?php get_footer(); ?>
