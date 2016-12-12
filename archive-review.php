<?php
get_header();
?>




    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS ARTICLE PART>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->

    <article class="container">
      <?php get_template_part( 'searchbar' ); ?>

      <div class="clearfix border">

  <!-- This is the sidebar replacement -->
  <?php get_sidebar();?>

        <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<This is the main section in ARTICLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

        <div class="thisBox col-xs-12 col-sm-12 col-md-10 clearfix border-left">
        <!-- <div class="col-xs-12 col-sm-6 col-md-12 clearfix boxGreyGlow border-bottom-md"> -->
          <?php
          if(have_posts()):
            while(have_posts()):
              the_post();

              ?>


              <div class="col-xs-12 col-sm-12 col-md-12 clearfix boxGreyGlow border-bottom-md">
                <a href="<?= get_permalink(); ?>">
                <div class="col-xs-12 col-sm-12 col-md-9">
                  <?php
                  if(has_post_thumbnail()):
                    the_post_thumbnail( 'custom-thumb-300', array( 'class' => 'col-xs-12 col-sm-12 col-md-4' ) );
                  endif;
                  ?>
                  <h3><?php the_title();?></h3>
                  <p>
                    <?php the_field('author'); ?>
                  </p>
                  <p>
                  <?php the_excerpt(); ?>
                  </p>
                </div>
                </a>
                <div class="col-xs-12 col-sm-12 col-md-3 border-md fullHeight">
                  <button class="infoButton boxGlow col-xs-12 col-md-12 margin" type="button" name="button"><a href="<?= get_permalink(); ?>">Read more</a></button>
                  <p class="fullWidth-xs ">
                    ratings
                  </p>
                  <p class="fullWidth-xs ">
                    <?php the_field('ratings'); ?>
                  </p>
                  <p>
                  Posted in : <?php the_category(); ?>
                </p>
                </div>
            </div>
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
        <!-- </div> -->
        </div>

      </div>
    </article>



    <?php get_footer(); ?>
