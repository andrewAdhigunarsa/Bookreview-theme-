<!-- <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/wordpress/">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
		</form> -->

    <!-- <div class="fullWidthBackground col-xs-12">
      <div class="container">
        <div class="row">
          <form action="" method="get" id="searchForm">
            <div class="col-xs-12 searchBox " id="searchBox">
              <div class="row">
                <div class="col-xs-9 col-sm-9 col-md-9 searchInput">
                  <input name="q" class="boxGlow " id="userSearch" type="text" placeholder="Search Here">
                </div>
                <div class="col-xs-2 col-sm-1 col-md-3 searchButton">
                  <div class="input">
                    <button id="userSubmit" type="submit" class=" "><span class="hidden-xs-sm">Search </span><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> -->

    <div class="fullWidthBackground col-xs-12" >
      <div class="container">
      <div class="row">

        <?php if(is_active_sidebar('sidebar4')):
          //sidebar1 id given when registered sidebar in function.php
            dynamic_sidebar('sidebar4');
              endif;
         ?>
      </div>
      </div>
    </div>
