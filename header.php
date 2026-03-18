<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="container">
            <div class="site-header-left">
                <button class="nav-toggle"><i class="ph-bold ph-list"></i></button>
                <a class="phone-icon"><i class="ph ph-phone"></i></a>
                <span class="lang-switcher">EN</span>
            </div>

            <div class="site-logo header-logo">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo home_url(); ?>">
                        <img
                        class="custom-logo"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                        alt="header-logo">
                    </a>
                <?php endif; ?>
            </div>

            <div class="site-header-right">
                <a href="#" class="reserve-link">Резервирай <i class="ph ph-arrow-down-right"></i></a>
                <nav class="site-nav">
                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'fallback_cb' => function() {
                            echo '<ul>
                                <li><a href="#"><i class="ph ph-chef-hat"></i> Вечеря</a></li>
                                <li><a href="#"><i class="ph ph-bed"></i> Нощувка</a></li>
                                <li><a href="#"><i class="ph ph-flag-pennant"></i> Голф</a></li>
                            </ul>';
                        },
                    ]); ?>
                </nav>
            </div>
        </div>
    </header>