
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<This is the sidebar for extra small screen>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

<div class="thisBox col-xs-12 hidden-md">
  <div >
    <div class="arr">
      <?php if(is_active_sidebar('sidebar1')):
        //sidebar1 id given when registered sidebar in function.php
          dynamic_sidebar('sidebar1');
            endif;
       ?>

    </div>

  </div>


</div>
<!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<This is the sidebar hidden in extra small screen>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

<div class="thisBox col-xs-12 col-sm-2 clearfix hidden-xs-sm" >
  <div class="row">

    <?php if(is_active_sidebar('sidebar1')):
      //sidebar1 id given when registered sidebar in function.php
        dynamic_sidebar('sidebar1');
          endif;
     ?>
  </div>
</div>
