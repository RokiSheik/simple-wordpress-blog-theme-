<footer class="site-footer">
    <div class="footer-grid">
        <div class="footer-brand">
            <div class="logo"><?php echo esc_html( get_theme_mod( 'easyplate_logo_text', 'EasyPlate' ) ); ?></div>
            <p><?php echo esc_html( get_theme_mod( 'easyplate_footer_desc', 'An intelligent recipe platform powered by AI that takes the guesswork out of meal prep.' ) ); ?></p>
        </div>

        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <?php 
                for ( $i = 1; $i <= 3; $i++ ) {
                    $label = get_theme_mod( "easyplate_footer_link_{$i}_label" );
                    $url   = get_theme_mod( "easyplate_footer_link_{$i}_url", '#' );
                    if ( $label ) {
                        echo '<li><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>

        <div class="footer-column">
            <h4>Support</h4>
            <ul class="footer-links">
                <li><a href="https://easyplateai.com/">Help Center</a></li>
                <li><a href="https://easyplateai.com/">FAQ</a></li>
                <li><a href="https://easyplateai.com/">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo esc_html( get_theme_mod( 'easyplate_logo_text', 'EasyPlate' ) ); ?>. All rights reserved.</p>
        <div class="footer-legal">
            <a href="https://easyplateai.com/">Privacy</a>
            <a href="https://easyplateai.com/">Terms</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
