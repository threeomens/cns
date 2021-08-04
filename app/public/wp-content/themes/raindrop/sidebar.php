<?php if (is_single() || is_home() || is_archive()) { ?>

        <!-- Sidebar for Posts -->

				<div id="sidebar" class="col-md-4 widget-posts">

          <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar1' ); ?>

          <?php else : ?>

            <!-- This content shows up if there are no widgets defined in the backend. -->

            <div class="alert alert-danger">
              <p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
            </div>

          <?php endif; ?>

        </div>

<?php } else { ?>

        <!-- Sidebar for Pages -->

        <div id="sidebar" class="col-md-4">
          <?php 

          if (!is_page('contact')) {
            echo '<h1 style="border-bottom: 1px solid #eeeeee; padding-bottom: 15px; margin-bottom: 20px;">Contact Us</h1>';
            // echo do_shortcode('[contact-form-7 id="1929" title="Sidebar Contact Form"]'); 
            echo '<script type="text/javascript" src="https://leads-capturer.futuresimple.com/embed.js?token=47e8f6d8ade99b700c0668ab68bf132a"></script>';
          }

          ?>
          <div class="widget widget-pages">
            <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu-pages' ) ); ?>
          </div>

          <!-- <div class="sidebar-cta">
          <h3>Lorem Ipsum</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <br>
<div class="sidebar-btn">
                  <a href="/enrollment-forms/" target="_blank" class="btn"><button class="orange-btn">ENROLLMENT FORMS</button><div class="orange-btn-after"><i class="fa fa-arrow-right"></i></div></a>
                  <a href="/contact/" target="_blank" class="btn"><button class="orange-btn">GET A QUOTE</button><div class="orange-btn-after"><i class="fa fa-arrow-right"></i></div></a>
                </div>
        </div>-->

        <?php if (is_page('our-process')) { ?>
        <div class="sidebar-button">
        <img src="/wp-content/uploads/2016/08/Notebook_Icon.png" />
        <h3>See Our Services</h3>
        <a href="/services/"><button class="rd-btn">Learn More <i class="fa fa-arrow-circle-right"></i></button></a>
        </div>        
        <?php } else { ?>
        <div class="sidebar-button">
        <img src="/wp-content/uploads/2016/08/Notebook_Icon.png" />
        <h3>See Our Process</h3>
        <a href="/our-process/" onClick="ga('send', 'event', { eventCategory: 'See Our Process', eventAction: 'Click', eventLabel: 'Learn More'});"><button class="rd-btn">Learn More <i class="fa fa-arrow-circle-right"></i></button></a>
        </div>          
        <?php } ?>
          <?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar2' ); ?>

          <?php endif; ?>




<?php } ?>