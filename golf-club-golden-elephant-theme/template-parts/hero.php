<?php
$bg = get_field('hero_image') ?: get_template_directory_uri() . '/assets/images/hero.jpg';
$title = get_field('hero_title') ?: 'Турнири';
$sub = get_field('hero_subtitle') ?: 'Играй с духа на шампионите';
?>
<section class="hero" style="background-image: url('<?php echo esc_url($bg); ?>');">
    <div class="container">
        <h1 class="hero-title"><?php echo esc_html($title); ?></h1>
        <p class="hero-subtitle"><?php echo esc_html($sub); ?></p>
    </div>
</section>