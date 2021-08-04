<?php
/*
Template Name: Register Now
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/inner-masthead') ?>

<style>

#register-now-form {
  background-color: #f1f1f1;
  padding: 0 0 70px 0;
}
.register-now-terms-title {
  margin: 0 0 20px 0;
  font-size: 44px;
}
.register-now-terms {
    background-color: #fff;
    height: 606px;
    padding: 20px;
    overflow: scroll;
}

span.wpcf7-not-valid-tip {
    color: #fff;
}

div.wpcf7-response-output {
  margin: 20px 0 0 0;
}

.register-now-form {
    padding: 20px 30px;
    background-image: url(http://www.cns.local/wp-content/uploads/2016/08/Background_Stats-1.jpg);
    background-color: #b82832;
    color: #fff;
    background-position: center center;
    background-size: cover;
}

.register-now-form input,
.register-now-form textarea {
  color: #000;
}

.wpcf7-form-control-signature-body {
  background-image: url(/wp-content/themes/raindrop/library/images/CNS/signature-background.png);
  background-size: contain;
  background-repeat: no-repeat;
  background-position: bottom left;
  background-color: #fff;
}

#wpcf7_signature-264_clear {
  display: none;
}

.wpcf7-form-control-signature-wrap {
height: 70px !important;
}

span.wpcf7-list-item {
  margin: 20px 0 10px 0;
}

.wpcf7-form-control.wpcf7-submit {
  background: none;
  border: 1px solid #fff;
  font-weight: 700;
  padding: 4px 25px;
  letter-spacing: 1px;
  text-transform: uppercase;
  color: #fff;
  margin-top: 10px;
  border-width: 2px;
  border-style: solid;
  font-weight: 700;
  font-size: 18px;
}

@media (max-width: 768px) {
  .register-now-terms {
    height: auto;
    overflow: initial;
    margin: 0 0 20px 0;
  }
}
</style>

  <div id="register-now-form">

      <div class="container">

        <div id="content" class="clearfix row">
        
          <div id="main"> 
          
          <div class="col-md-7">
            <h3 class="register-now-terms-title">Service Agreement</h3>
            <div class="register-now-terms">
              <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;?>
            </div>
          </div>

          <div class="col-md-5">
            <div class="register-now-form">
              <?php echo do_shortcode('[contact-form-7 id="672" title="Registration"]'); ?>
            </div>
          </div>
            
        
          </div> <!-- end #main -->
            
        </div> <!-- end #content -->

      </div> <!-- end .container -->

    </div>

<?php get_footer(); ?>
