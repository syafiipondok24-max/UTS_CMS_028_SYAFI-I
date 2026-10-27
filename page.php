<?php get_header(); ?>
<main class="container content-wrap">
    <section>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'article-card' ); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="article-content"><?php the_content(); ?></div>
                <?php wp_link_pages(); ?>
            </article>
        <?php endwhile; ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
