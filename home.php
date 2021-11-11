<?php
get_header();
?>
<div class="content-home">
<div class="container">
<div class="row justify-content-evenly align-items-center">
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        ?>
        
            <div  class="col-md-4 single-post">
            <?php
		the_title( '<h2>', '</h2>' );
		the_post_thumbnail('medium');
		the_excerpt();
        ?>
        <a href="<?php echo the_permalink(); ?>">Link to Post</a>
		
            </div>
     
<?php
    
	endwhile;
else:
	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>
</div>
</div>
</div>



<?php
get_footer();
?>