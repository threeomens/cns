<?php get_header(); ?>

<?php get_template_part('template-parts/inner-masthead') ?>

    <div class="container">

			<div id="content" class="row clearfix">

						<div id="main" class="col-md-8 clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<?php if ( has_post_thumbnail() ) { ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
									<div class="featured-img-blog" style="background-image: url('<?php echo $image[0]; ?>')">
									</div>
								<?php } // end if ?>

								<?php if ( has_post_thumbnail() ) { ?>
								<div class="content-wrapper">
								<?php } else { ?>
								<div class="content-wrapper content-wrapper-no-fi">
								<?php } ?>

								<header class="article-header">
									<div class="titlewrap clearfix">
										<h1 class="post-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									</div>

								</header> <?php // end article header ?>

								<section class="post-summary clearfix">
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink();?>"><button class="rd-btn btn-transparent-blue-gold">Read More</button></a> 
									<?php wp_link_pages(
                                		array(
                                		
	                                        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
	                                        'after' => '</div>'
                                		) 
                                	); ?>
								</section> <?php // end article section ?>
																</div>

								<?php // comments_template(); // uncomment if you want to use them ?>


							</article> <?php // end article ?>

							<?php endwhile; ?>

				

						</div> <?php // end #main ?>


						<?php get_sidebar(); ?>


			</div> <?php // end #content ?>
<div class="pagination-wrapper row">
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
						</div>
    </div> <!-- end ./container -->

<?php get_footer(); ?>
