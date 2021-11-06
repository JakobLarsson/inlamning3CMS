<?php

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$pageImageArray = get_field('page_img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div id="content-frontpage">
	<div id="wrapper-frontpage">
		<!-- Make sure data-text equals the text you put inside the tags. -->
        <div class="text-area">
        <p class="sub-bigger">HELLO I AM JAKOB LARSSON FROM SWEDEN WHO IS STUDYING  </p>
        </div>
        <div class="headline-area">
        <h1 class="glitch " data-text="
            Web Developement">Web Developement</h1>
        </div>
		<div class="end-area">
        <span class="sub">EFFECT</span>
        </div>
		
        <button>Click me</button>
	</div>
</div>


<?php
get_footer();
?> 