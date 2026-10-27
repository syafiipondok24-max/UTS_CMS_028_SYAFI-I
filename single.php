<?php get_header(); ?>
<main class="container content-wrap">
    <section>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'article-card' ); ?>>
                <div class="post-meta"><?php echo esc_html( get_the_date() ); ?> · Oleh <?php the_author(); ?> · <?php the_category( ', ' ); ?></div>
                <h1><?php the_title(); ?></h1>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div><?php the_post_thumbnail( 'large' ); ?></div>
                <?php endif; ?>
                <div class="article-content"><?php the_content(); ?></div>
                <?php wp_link_pages(); ?>
                <hr>
                <p><strong>Bagikan pengetahuan:</strong> Terima kasih telah membaca artikel ini.</p>
                <div class="nav-links"><?php the_post_navigation(); ?></div>
            </article>
            <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>
        <?php endwhile; ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
