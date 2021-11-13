<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  
get_header(); ?>
  
<div class="content-home-single">
<div class="container">
<div class="row justify-content-evenly align-items-center row">
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
        ?>
        
            <div  class="col-md-6 single-text">
             <?php
		      the_title( '<h2>', '</h2>' );
		      the_content();
             ?>
            </div>
            <div class="col-md-6 single-img">
             <?php   
              the_post_thumbnail('large');
             ?>
            </div>
     
<?php
    
	endwhile;
else:
	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;?>
</div>
</div>
</div>
  
<?php get_footer(); ?>