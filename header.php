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
                    <a href="<?php echo home_url(); ?>">Golf Club</a>
                <?php endif; ?>
            </div>

            <div class="site-header-right">
                <a href="#" class="reserve-link">Резервирай <i class="ph ph-arrow-down-right"></i></a>
                <nav class="site-nav">
                    <?php wp_nav_menu(['theme_location' => 'primary', 'container' => false]); ?>
                </nav>
            </div>
        </div>
    </header>