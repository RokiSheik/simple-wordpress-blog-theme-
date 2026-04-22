<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php echo esc_html( get_theme_mod( 'easyplate_logo_text', 'EasyPlate' ) ); ?>
        </a>
    </div>

    <nav class="nav-menu">
        <?php 
        for ( $i = 1; $i <= 4; $i++ ) {
            $label = get_theme_mod( "easyplate_nav_item_{$i}_label" );
            $url   = get_theme_mod( "easyplate_nav_item_{$i}_url", '#' );
            if ( $label ) {
                echo '<a href="' . esc_url( $url ) . '" class="nav-item">' . esc_html( $label ) . '</a>';
            }
        }
        ?>
        <a href="https://easyplateai.com/wp-login.php" class="login-btn">Login</a>
    </nav>
</header>
