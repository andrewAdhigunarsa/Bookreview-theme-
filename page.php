<?php
get_header();
?>

<article class="container">
  <!-- <div class="fullWidthBackground col-xs-12" style="padding:10%;"></div> -->
<?php get_template_part( 'searchbar' ); ?>
  <div class="col-xs-12 row border">
  <?php
  if(is_page()):
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
  endif;

  ?>

<?php the_field('google_map_link'); ?>
</div>



</article>


<?php
get_footer();

?>
