<?php

  // $query="SELECT count(IMAGES) as 'counts'  FROM `tblpromopro` pr , `tblproduct` p  
  // WHERE pr.`PROID`=p.`PROID` and `PROBANNER`=1";
  // $mydb->setQuery($query);
  // $cur = $mydb->loadResultList(); 
  // foreach ($cur as $result) {
  // $maxrow = $result->counts; 
  // }
 
?>
 
<style type="text/css">
 .item {
   width: 100%;
   height:100%
 }
 .item img  {
    width: 100%;
    height: 100%;
    <!--object-fit: none;-->
 }
</style>

 
     <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
 
  <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active"> 
                    <img  src="<?php echo web_root ;?>img/banner_3.png"   />  
                <div class="carousel-caption">
                    <!--<h2>DARBC HOUSING PROFILING SYSTEM</h2>-->
                </div>
            </div> 
             <div class="item"> 
                    <img  src="<?php echo web_root ;?>img/banner_2.png"   />  
                
            </div> 
              <div class="item"> 
                    <img  src="<?php echo web_root ;?>img/banner_1.png"   />  
            </div> 
        </div>

         <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>
 
 

    <!-- Script to Activate the Carousel -->
