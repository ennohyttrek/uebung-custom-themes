<!DOCTYPE html>
<html lang="de">

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>

    <nav id="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </nav>

    <h1><?php bloginfo('title'); ?></h1>

    <?php while( have_posts() ) : the_post(); ?>

    <article>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>

        <?php the_content(); ?>
    </article>

    <?php endwhile; ?>

    <?php wp_footer() ?>
</body>

</html>

