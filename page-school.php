<?php

get_header();

$big = get_field('big-label');
$small1 = get_field('second-label');
$small2 = get_field('info-text');
$courses = get_field('info-courses');
$pageImageArray = get_field('img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div class="content-school">
	<div class="container">
    <div class="img-s">
              <img class="img-s" src="<?php echo $pageImage ?>" alt="">
           </div>
        <div class="row">
            <div class="col-8">
             
           <div class="headline-area">
             <h1 class="header-text"><?php echo $big ?></h1>
          </div>
          <div class="end-area-s">
              <span class="sub-s"><?php echo $small2 ?></span>
          </div>
        </div>
        <div class="col-3 right-content" >
             <div class="end-area-s">
                 <span class="sub-s"><?php echo $courses ?></span>
             </div>
        </div>
    </div>
		<!-- Make sure data-text equals the text you put inside the tags. -->
        
		

		
        <button>Click me</button>
	</div>
</div>


<?php
get_footer();
?> 