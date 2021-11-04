<?php

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$pageImageArray = get_field('page_img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div class="content">
  <div class="main-box-left">
   <div>
<h1 class="display-1">h1</h1>
   </div>
  <div>
<p><?php echo $description ?></p>
  </div>
  <div>
<a class="btn btn-primary" href="#">klicka här</a>
  </div>
  
  </div>
  <div class="main-box-right">
   <img class="main-img"  src="<?php echo $pageImage; ?>">
  </div>
</div>


<?php
get_footer();
?> 