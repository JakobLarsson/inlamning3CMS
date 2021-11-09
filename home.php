<?php

get_header();
?>

<ul>
<?php $the_query = new WP_Query( 'showposts=5' ); ?> <!-- change the number "5" to the number of posts you want to display -->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<li><?php the_excerpt(__('(weiterlesen)')); ?></li> <!-- change "weiterlesen" to the value you want to display as "read more..." -->
<?php endwhile;?>
</ul>