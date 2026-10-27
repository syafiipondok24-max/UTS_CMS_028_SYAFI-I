<footer class="site-footer">
    <div class="footer-inner">
        <div>
            <strong><?php bloginfo( 'name' ); ?></strong>
            <div><?php echo esc_html( get_bloginfo( 'description' ) ); ?></div>
        </div>
        <div>&copy; <?php echo esc_html( wp_date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Dibuat dengan WordPress.</div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>