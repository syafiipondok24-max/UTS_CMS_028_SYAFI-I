<?php get_header(); ?>
<main class="container content-wrap">
    <section>
        <h1 class="section-heading">
            <?php
            if ( is_home() && ! is_front_page() ) {
                single_post_title();
            } elseif ( is_search() ) {
                printf( esc_html__( 'Hasil pencarian: %s', 'syafii-starter' ), esc_html( get_search_query() ) );
            } else {
                esc_html_e( 'Artikel Terbaru', 'syafii-starter' );
            }
            ?>
        </h1>
        <?php if ( have_posts() ) : ?>
            <div class="post-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class( 'post-card' ); ?>>
                        <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
                        </a>
                        <div class="post-card-content">
                            <div class="post-meta"><?php echo esc_html( get_the_date() ); ?> · <?php the_author(); ?></div>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <div class="post-excerpt"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>">Baca selengkapnya →</a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <div class="pagination"><?php the_posts_pagination(); ?></div>
        <?php else : ?>
            <div class="article-card">
                <p>Belum ada artikel. Silakan masuk ke Dashboard WordPress → Pos → Tambah Pos untuk membuat artikel pertama.</p>
            </div>
        <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
