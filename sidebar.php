<aside class="sidebar">
    <section class="sidebar-widget">
        <h2>Tentang Website</h2>
        <p>Website ini dibuat sebagai contoh tema WordPress sederhana dengan tampilan responsif dan struktur yang mudah dikembangkan.</p>
    </section>
    <section class="sidebar-widget">
        <h2>Artikel Terbaru</h2>
        <ul>
            <?php
            $sidebar_posts = get_posts( array( 'numberposts' => 5, 'post_status' => 'publish' ) );
            if ( $sidebar_posts ) :
                foreach ( $sidebar_posts as $sidebar_post ) :
                    echo '<li><a href="' . esc_url( get_permalink( $sidebar_post->ID ) ) . '">' . esc_html( get_the_title( $sidebar_post->ID ) ) . '</a></li>';
                endforeach;
            else :
                echo '<li>Belum ada artikel.</li>';
            endif;
            ?>
        </ul>
    </section>
    <section class="sidebar-widget">
        <h2>Kategori</h2>
        <ul><?php wp_list_categories( array( 'title_li' => '', 'show_count' => true ) ); ?></ul>
    </section>
    <section class="sidebar-widget">
        <h2>Cari Artikel</h2>
        <?php get_search_form(); ?>
    </section>
</aside>
