<?php get_header(); ?>

<?php get_template_part('template-parts/inner-masthead') ?>
      
    <div class="container">  

			<div id="content" class="clearfix row">

				<div id="main" class="col-md-8 clearfix" role="main">

        		<?php get_template_part( 'breadcrumb' ); ?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

							</header> <?php // end article header ?>

							<?php if(is_single()) { ?>
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-featured' ); ?>
								<?php if (has_post_thumbnail() ) { ?>
									<section class="featured-content featured-img featured-img-bg" style="background: url('<?php echo $image[0]; ?>')">
								<?php } // end if 
								else { ?>
									<section class="featured-content featured-img">
										<?php if ( has_post_thumbnail() ) { ?>
		                                    <a class="featured-img" href="<?php the_permalink(); ?>">
		                                    	<?php the_post_thumbnail( 'post-featured' ); ?>
		                                    </a>
			                            <?php } // end if 
										else { ?>
			                            	<hr>
			                            <?php } //end else?>
				                <?php } // end else ?>
							<?php } // end if 
							else { ?>
								<section class="featured-content featured-img">
							<?php } // end else ?>

							</section>
	<section class="single-time-wrapper">
					<h2 style="color: #b71322; margin-top: 0;
    font-size: 23px;
    text-transform: none;
    font-family: 'Exo 2';
    font-weight: 700;
"><?php the_title() ?></h2>
								</section>
							<section class="entry-content single-content clearfix" itemprop="articleBody">
						
							
								
								<?php the_content(); ?>

								<?php get_template_part('template-parts/share') ?>

								<?php wp_link_pages(
                                	array(

                                        'before' => '<div class="page-link"><span>' . __( 'Pages:', 'brew' ) . '</span>',
                                        'after' => '</div>'
                                	) 
                                ); ?>
							</section> <?php // end article section ?>


					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

				<?php get_sidebar(); ?>

			</div> <?php // end #content ?>

    </div> <?php // end ./container ?>


<?php get_footer(); ?>
