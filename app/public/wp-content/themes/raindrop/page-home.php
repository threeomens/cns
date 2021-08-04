<?php
/*
Template Name: Home Page Template
*/

get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();

if( have_rows('homepage_elements') ):

    while ( have_rows('homepage_elements') ) : the_row();

        if( get_row_layout() == 'slider' ) {
          get_template_part('template-parts/masthead-slider'); 
        }

        if( get_row_layout() == 'call_to_action' ) {
          get_template_part('template-parts/main-cta');
        } 

        if( get_row_layout() == 'blog_posts' ) {
          get_template_part('template-parts/blog-posts');
        } 

        if( get_row_layout() == 'social_media' ) {
          get_template_part('template-parts/social-media');
        } 

        if( get_row_layout() == 'logo_highlights' ) {
          get_template_part('template-parts/logo-highlights');
        }         

    endwhile;

else :

    echo 'Go to the homepage and start adding in elements!';

endif;

endwhile;
endif;

get_footer(); 

?>
