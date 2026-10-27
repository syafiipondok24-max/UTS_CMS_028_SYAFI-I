<?php get_header(); ?>
<main>
    <section class="hero">
        <div class="container">
            <h1>Berbagi Informasi, Ide, dan Pengetahuan</h1>
            <p>Selamat datang di website kami. Temukan artikel terbaru, informasi bermanfaat, dan berbagai cerita yang dapat menambah wawasan.</p>
            <a class="button" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' ) ); ?>">Jelajahi Artikel</a>
        </div>
    </section>
    <div class="container content-wrap">
        <section>
            <h2 class="section-heading">Artikel Terbaru</h2>
            <?php
            $latest_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ) );
            ?>
            <?php if ( $latest_posts->have_posts() ) : ?>
                <div class="post-grid">
                    <?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                        <article <?php post_class( 'post-card' ); ?>>
                            <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'large' ); } ?>
                            </a>
                            <div class="post-card-content">
                                <div class="post-meta"><?php echo esc_html( get_the_date() ); ?></div>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="post-excerpt"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>">Baca selengkapnya →</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <div class="article-card"><p>Artikel belum tersedia. Tambahkan artikel melalui menu Pos di Dashboard WordPress.</p></div>
            <?php endif; wp_reset_postdata(); ?>
        </section>
        <?php get_sidebar(); ?>
    </div>
</main>
<?php get_footer(); ?>
