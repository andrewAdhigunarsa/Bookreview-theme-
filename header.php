<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="keyword" content="hotel, offers">
  <meta name="decription" content="This is a website about bookshop">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300|Lato" rel="stylesheet">
  <!-- <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  <title>

  </title>

  <?php
 /* Always have wp_head() just before the closing </head> * tag of your theme, or you will break many plugins, * which generally use this hook to add elements to * <head> such as styles, scripts, and meta tags. */

   wp_head();
   ?>
</head>
   <body>
     <div class="wholePageContainer">
   <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
   <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE NAVIGATON PART>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
     <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->

       <div class="navigation">

         <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE LOGO ON THE LEFT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

         <div class="logo">
           <h1><a class="glow" href="<?php echo esc_url( home_url( '/' ) ); ?>">BookReview</a></h1>
         </div>

         <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<THIS IS THE HIDDEN MENU ON THE RIGHT>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

         <nav class="dropdown">
           <input type="checkbox" id="button">
           <label for="button"></label>
           <div class="menuBox">
             <div class="rightBox noMargin">
               <div class="leftBox noMargin">
                 <div class="row hidden-xs-sm">

                   <?php if(is_active_sidebar('sidebar3')):
                     //sidebar1 id given when registered sidebar in function.php
                       dynamic_sidebar('sidebar3');
                         endif;
                    ?>

                 </div>
                 <div class="row hidden-xs-sm">

                   <?php if(is_active_sidebar('sideba4')):
                     //sidebar1 id given when registered sidebar in function.php
                       dynamic_sidebar('sidebar4');
                         endif;
                    ?>
                 </div>
               </div>
             </div>


           </div>

           <?php
           $defaults = array(
           'theme_location' => 'primary',
           'container' => 'ul',
           'container_class' => '', );
           wp_nav_menu( $defaults );
           ?>

           <!-- below is the old static menu -->
           <!-- <ul>
             <li><a href="result.php">Catalogue</a></li>
             <li><a href="about.php">ABOUT</a></li>
             <li><a href="contact.php">CONTACT</a></li>
           </ul> -->
         </nav>
       </div>
