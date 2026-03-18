<?php
$about_title = get_field('about_title') ?: 'Духът на голфа';
$about_text_1 = get_field('about_text_1') ?: 'Голф турнирите са сред най-очакваните събития в календара на всеки клуб. Те събират любители и професионалисти от страната и чужбина, обединени от страстта към играта и състезателния дух.';
$about_text_2 = get_field('about_text_2') ?: 'Всяко събитие се организира с внимание към детайла и следва утвърдени стандарти на спортменство и престиж, които допринасят за високото ниво и атмосферата на турнира.';
?>

<section class="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg" alt="about-image">
            </div>
            <div class="about-content">
                <img class="about-watermark"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/about-watermark.png"
                    alt="about-watermark">
                <h2 class="about-title"><?php echo esc_html($about_title); ?></h2>
                <hr class="about-divider">
                <?php if ($about_text_1): ?>
                    <p class="about-text"><?php echo esc_html($about_text_1); ?></p>
                <?php endif; ?>
                <?php if ($about_text_2): ?>
                    <p class="about-text"><?php echo esc_html($about_text_2); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>