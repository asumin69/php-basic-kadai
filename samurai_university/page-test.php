<?php get_header(); ?>

<h1>テストページです</h1>

<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>

    <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>