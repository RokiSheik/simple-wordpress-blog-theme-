<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        .menu-toggle {
            display: none !important;
            width: 44px;
            height: 44px;
            background-color: transparent;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='3' y1='12' x2='21' y2='12'%3E%3C/line%3E%3Cline x1='3' y1='6' x2='21' y2='6'%3E%3C/line%3E%3Cline x1='3' y1='18' x2='21' y2='18'%3E%3C/line%3E%3C/svg%3E") !important;
            background-repeat: no-repeat !important;
            background-position: center !important;
            background-size: 28px !important;
            border: none !important;
            cursor: pointer !important;
            z-index: 10001 !important;
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block !important;
            }

            .site-header {
                display: flex !important;
                justify-content: space-between !important;
                align-items: center !important;
            }

            .nav-menu {
                position: fixed !important;
                top: 0 !important;
                right: -100% !important;
                width: 80% !important;
                max-width: 300px !important;
                height: 100vh !important;
                background-color: #1a202c !important;
                flex-direction: column !important;
                justify-content: center !important;
                align-items: center !important;
                gap: 2rem !important;
                transition: right 0.4s ease-in-out !important;
                z-index: 9999 !important;
                display: flex !important;
            }

            .nav-menu.active {
                right: 0 !important;
            }

            .nav-menu a {
                color: white !important;
                font-size: 1.2rem !important;
                text-decoration: none !important;
            }
        }

        .menu-toggle.active {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cline x1='18' y1='6' x2='6' y2='18'%3E%3C/line%3E%3Cline x1='6' y1='6' x2='18' y2='18'%3E%3C/line%3E%3C/svg%3E") !important;
        }
        
        /* POST PAGE & COMMENTS STYLES */
        .single-post-container {
            max-width: 800px !important;
            margin: 3rem auto !important;
        }
        .entry-title {
            font-size: 2.8rem !important;
            color: #ffffff !important;
            margin-bottom: 1.5rem !important;
            line-height: 1.2 !important;
        }
        .post-meta {
            color: #94a3b8 !important;
            font-size: 0.95rem !important;
            margin-bottom: 3rem !important;
        }
        .entry-content {
            font-size: 1.15rem !important;
            line-height: 1.8 !important;
            color: #e2e8f0 !important;
        }
        .comments-area {
            margin-top: 5rem !important;
            padding-top: 3rem !important;
            border-top: 1px solid #1e293b !important;
        }
        .comment-list {
            list-style: none !important;
            padding: 0 !important;
        }
        .comment-body {
            background: #1e293b !important;
            padding: 2rem !important;
            border-radius: 16px !important;
            border: 1px solid #334155 !important;
            margin-bottom: 2rem !important;
            color: #e2e8f0 !important;
        }
        .comment-author cite {
            color: #ffffff !important;
            font-size: 1.1rem !important;
            font-style: normal !important;
            font-weight: 700 !important;
        }
        .comment-meta {
            color: #64748b !important;
            margin-bottom: 1rem !important;
        }
        #commentform input[type="text"],
        #commentform input[type="email"],
        #commentform textarea {
            width: 100% !important;
            background: #0f172a !important;
            border: 1px solid #1e293b !important;
            color: #ffffff !important;
            padding: 1rem !important;
            border-radius: 12px !important;
            margin-top: 0.5rem !important;
            font-size: 1rem !important;
        }
        #commentform label {
            color: #94a3b8 !important;
            font-weight: 500 !important;
        }
        .form-submit input[type="submit"] {
            background: #ff6b35 !important;
            color: white !important;
            border: none !important;
            padding: 1rem 3rem !important;
            border-radius: 9999px !important;
            font-weight: 700 !important;
            font-size: 1rem !important;
            cursor: pointer !important;
            transition: all 0.3s ease !important;
            margin-top: 1rem !important;
        }
        .form-submit input[type="submit"]:hover {
            background: #e85a2a !important;
            transform: translateY(-2px) !important;
            box-shadow: 0 10px 15px -3px rgba(255, 107, 53, 0.3) !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="logo">
            <a href="https://easyplateai.com/">
                <?php echo esc_html(get_theme_mod('easyplate_logo_text', 'EasyPlate')); ?>
            </a>
        </div>

        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
        </button>

        <nav id="primary-menu" class="nav-menu">
            <?php
            for ($i = 1; $i <= 4; $i++) {
                $label = get_theme_mod("easyplate_nav_item_{$i}_label");
                $url = get_theme_mod("easyplate_nav_item_{$i}_url", '#');
                if ($label) {
                    echo '<a href="' . esc_url($url) . '" class="nav-item">' . esc_html($label) . '</a>';
                }
            }
            ?>
            <a href="https://easyplateai.com/wp-login.php" class="login-btn">Login</a>
        </nav>
    </header>