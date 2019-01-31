<?php get_header();?>

<div class="container">
    <h1>this is home.php</h1>
    <h4 class="underline">this is the default template for posts home page</h4>

    <div class="blog-card-cont">

       <?php while ( have_posts() ) : the_post(); ?>
       <a href=" <?php echo get_permalink(); ?>">
	        <div class="blog-card">
                <h1><?php  the_title() ?></h1>
                <p><?php the_excerpt() ?></p>
            </div>
            </a>
        <?php endwhile; ?>

    </div>
   


</div>

<?php get_footer();?>