<?php get_header(); ?>
<main class="container content-wrap">
    <section>
        <h1 class="section-heading"><?php the_archive_title(); ?></h1>
        <?php the_archive_description( '<div class="article-card">', '</div>' ); ?>
        <?php if ( have_posts() ) : ?>
            <div class="post-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'post-card' ); ?>>
                        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?></a>
                        <div class="post-card-content">
                            <div class="post-meta"><?php echo esc_html( get_the_date() ); ?></div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-excerpt"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>">Baca selengkapnya →</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div class="pagination"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <div class="article-card"><p>Belum ada artikel pada kategori ini.</p></div>
        <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
