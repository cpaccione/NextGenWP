<?php get_header(); ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
        <p>This is index.php</p>



        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>


        <?php endwhile; else: ?>

            <h1>Oh no!</h1>
            <p>No content is appearing on this page!</p>

        <?php endif; ?>

        </div>  
    </div>
</div>

<?php get_footer(); ?>