<?php get_header(); ?>

<!-- ///use this to grab content from wp-admin -->
<?php get_header(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>


<!-- //otherwise just write it yourself -->

<h1>this is singele.php</h1>

<h2>this is the default page for a single blog post</h2>
<p>check out the <a href="https://wphierarchy.com/" target="_blank">wphierarchy.com</a></p>



<?php get_footer(); ?>