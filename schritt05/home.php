<?php get_header(); ?>

    <h2 class="my-dev-label">Template: home.php</h2>

    <h1><?php bloginfo('title'); ?></h1>

    <?php while( have_posts() ) : the_post(); ?>

    <article>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>

        <?php the_content(); ?>
    </article>

    <?php endwhile; ?>


<?php get_footer(); ?>
