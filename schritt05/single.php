<?php get_header(); ?>

    <h2 class="my-dev-label">Template: single.php</h2>

    <h2><?php bloginfo('title'); ?></h2>

    <?php while( have_posts() ) : the_post(); ?>

    <article>
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title(); ?></h1>
        </a>

        <?php the_content(); ?>
    </article>

    <?php endwhile; ?>


<?php get_footer(); ?>
