<?php

get_header();

$big = get_field('big-text');
$link = get_field('link');
$small2 = get_field('small-text2');
$pageImageArray = get_field('img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div id="content-frontpage">
	<div id="wrapper-frontpage">
        <div class="container">
        
        <div class="headline-area">
        <h1 class="glitch " data-text="
        <?php echo $big ?>"><?php echo $big ?></h1>
        </div>
        <div class="img mb-3 mt-3">
            <img class="img-fpage" src="<?php echo $pageImage ?>" alt="">
        </div>
		<div class="end-area">
        <span class="sub"><?php echo $small2 ?></span>
        </div>

		<a href="<?php echo $link ?>" class="btn btn-primary mt-3"> Click me</a>
        
        </div>
		<!-- Make sure data-text equals the text you put inside the tags. -->
        
	</div>
</div>


<?php
get_footer();
?> 