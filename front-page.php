<?php

get_header();

$title = get_field('page_title');
$description = get_field('page_description');
$link = get_field('page_link');
$pageImageArray = get_field('page_img');
$pageImage = $pageImageArray['sizes']['large'];
?>

<div class="first-view">
    <div class="main-text">
    <p data-text="PSYCHO">PSYCHO</p>
    </div>
</div>


<?php
get_footer();
?> 