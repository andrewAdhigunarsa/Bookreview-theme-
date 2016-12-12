<?php
get_header();
?>

  <article class="container">
    <?php get_template_part( 'searchbar' ); ?>

  <div class="clearfix border">

    <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<This is the main section in ARTICLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

    <div class="thisBox col-xs-12 col-sm-12 col-md-12 clearfix">



        <div class="col-xs-12 col-sm-12 col-md-4 border-md">
          <?php
          if(has_post_thumbnail()):
            the_post_thumbnail( 'custom-thumb-600', array( 'class' => 'col-xs-12 col-sm-12 col-md-12' ) );
          endif;
          ?>
          <h3><a><?php the_title();?></a></h3>
          <p>
            <?php the_field('author'); ?>
          </p>
          <p>
            <?php the_category();?>
          </p>

          <p class="fullWidth-xs ">
            ratings
          </p>
          <p><?php the_field('ratings'); ?></p>
          <button class="infoButton boxGreyGlow col-xs-6 " type="button" name="button"><a href="<?php the_field('buylink'); ?>">Buy</a></button>
          <button class="reviewButton boxGreyGlow col-xs-6  " type="button" name="reviewbutton"><a href="<?php the_field('homelink');?>">Review</a></button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8">
          <?php

          //what do we do if it is a single post
          if(have_posts()):
            while(have_posts()):
              the_post();
              ?>
              <h1><a><?php the_title();?></a></h1>

              <p><?php the_content(); ?></p>



              <?php
            endwhile;
          else:
            ?>
            <p>
              SORRY THIS PAGE DOESN'T EXIST
            </p>
            <?php
          endif;
          ?>

        </div>
    </div>
  </div>
</article>



    <?php

    get_footer();

    ?>
