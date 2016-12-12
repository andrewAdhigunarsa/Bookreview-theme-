<?php



get_header();
?>



    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE CONTENT HEADER PART>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
      <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->


    <header class="topHeader">
      <div class="col-xs-12 headerImage noMargin">
        <div class="row">
          <?php
          //fiction post loop begins here
          $fictionPost = new WP_Query('cat=5&post_per_page=4');
          if($fictionPost->have_posts()):
            while($fictionPost->have_posts()):
              $fictionPost->the_post();
              //output content
              ?>
              <div class="clearfix HeaderImageContents col-xs-3 col-sm-3 noMargin ">
                <div class="infoBox">
                  <h4><?php the_title() ?></h4>
                  <p>
                  <?php the_excerpt() ?>
                  </p>
                  <button class="infoButton" type="button" name="infoButton"><a href="<?= get_permalink();?>">INFO</a></button>
                </div>
                <?php
                if(has_post_thumbnail()):
                  the_post_thumbnail( 'custom-thumb-300', array( 'class' => 'imgFullWidth' ) );
                endif;
                ?>
              </div>
              <?php
            endwhile;
          else:
            //fallback no content message here
          endif;

           ?>
        </div>
      </div>
      <div class="col-xs-12 headerImage noMargin">
        <div class="row">
          <?php
          //nonfiction post loop begins here
          $nonfictionPost = new WP_Query('cat=6&post_per_page=4');
          if($nonfictionPost->have_posts()):
            while($nonfictionPost->have_posts()):
              $nonfictionPost->the_post();
              //output content
              ?>
              <div class="clearfix HeaderImageContents col-xs-3 col-sm-3 noMargin ">
                <div class="infoBox">
                  <h4><?php the_title() ?></h4>
                  <p>
                  <?php the_excerpt() ?>
                  </p>
                <button class="infoButton" type="button" name="infoButton"><a href="<?= get_permalink();?>">INFO</a></button>
                </div>
                <?php
                if(has_post_thumbnail()):
                  the_post_thumbnail( 'custom-thumb-300', array( 'class' => 'imgFullWidth' ) );
                endif;
                ?>
              </div>
              <?php
            endwhile;
          else:
            //fallback no content message here
          endif;

           ?>
        </div>
      </div>
    </header>


    <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    <<<<<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE CONTENT PART WRAPPED IN ARTICLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
      <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->



    <article class="container border row">


      <?php get_template_part( 'searchbar' ); ?>
      <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<This is the search box in ARTICLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->


      <?php get_sidebar();?>

      <!-- <<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE MAIN CONTENT AREA IN SIDE ARTICLE>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

      <div class="thisBox col-xs-12 col-sm-12 col-md-10 clearfix border-left" style="background-color:white;">
        <div class="row">


          <?php
            if(have_posts()):
              while(have_posts()):
                the_post();
                ?><a href="<? get_permalink(); ?>">
                <div class="col-xs-12 col-sm-12 col-md-4 boxGreyGlow">

                  <div class="col-xs-12 col-sm-4 col-md-12">


                  <?php
                    if(has_post_thumbnail()):
                      the_post_thumbnail("custom-thumb-300");
                    endif;
                    ?>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-12">
                    <h2><?php the_title();?></h2>
                    <p><?php the_excerpt(); ?></p>
                    </div>
                    <button class="infoButton boxGlow col-xs-6 col-md-11" type="button" name="button"><a href="<?= get_permalink(); ?>">Read more</a></button>


                </div>
                </a>
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



    </article>

    <?php get_footer(); ?>