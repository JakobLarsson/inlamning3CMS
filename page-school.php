<?php

get_header();

$big = get_field('big-label');
$small1 = get_field('second-label');
$small2 = get_field('info-text');
$pageImageArray = get_field('img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div id="content-frontpage">
	<div id="wrapper-frontpage">
		<!-- Make sure data-text equals the text you put inside the tags. -->
        <div class="img">
            <img class="img-fpage" src="<?php echo $pageImage ?>" alt="">
        </div>
        <div class="headline-area">
        <h1 class="glitch " data-text="
        <?php echo $big ?>"><?php echo $big ?></h1>
        </div>
		<div class="end-area">
        <span class="sub"><?php echo $small2 ?></span>
        </div>

		
        <button>Click me</button>
	</div>
</div>


<?php
get_footer();
?> 