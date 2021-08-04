    <footer id="footer" class="clearfix">


        <div class="container">
          <div class="row">

            <?php the_field('footer', 'option'); ?>

            <div class="col-md-3 col-md-offset-3 social-media">

<?php if( get_field('footer_icons', 'option') ): ?>
<p>
	<?php while( has_sub_field('footer_icons', 'option') ): ?>

              <a href="<?php echo the_sub_field('link_url') ?>"><i class="fa <?php echo the_sub_field('icon_code') ?>"></i></a>

	<?php endwhile; ?>
</p>
<?php endif; ?>




            </div>
          </div> <!-- end .row -->
        </div>


    </footer> <!-- end footer -->


<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
          <div class="close-btn-wrapper">
            <button type="button" data-dismiss="modal"><i class="fa fa-times"></i></button>
          </div>

    <?php 
      $video = get_field("featured_video_url", "option");

      if( strpos($video, 'youtube') !== false ) {

        $video = str_replace("https://www.youtube.com/watch?v=", "", $video); ?>

        <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $video ?>" frameborder="0" allowfullscreen></iframe>

      <?php
      } elseif( strpos($video, 'vimeo') !== false ) {

        $video = str_replace("https://vimeo.com/", "", $video); ?>

        <iframe class="vimeo" src="https://player.vimeo.com/video/<?php echo $video ?>" data-id="<?php echo $video ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        <?php
      } else {
        echo 'Invalid video URL - video must be YouTube or Vimeo URL.';
      }

    ?>
      </div>
    </div>

  </div>
</div>


    <!-- all js scripts are loaded in library/bones.php -->
    <?php wp_footer(); ?>
    <!-- Hello? Doctor? Name? Continue? Yesterday? Tomorrow?  -->


    </div>
  </body>

</html> <!-- end page. what a ride! -->
