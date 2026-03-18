<?php
$front_page_id = get_option('page_on_front');

$club_name = get_field('footer_club_name', $front_page_id) ?: 'Голф клуб "Златният слон"';
$address = get_field('footer_address', $front_page_id) ?: 'м-ст Старата чешма, ул. „Игрището" 12';
$city = get_field('footer_city', $front_page_id) ?: 'Бяла река 2425, България.';
$phone = get_field('footer_phone', $front_page_id) ?: '+359 889 999 099';
$email = get_field('footer_email', $front_page_id) ?: 'hello@goldenelephant.com';
$hours = get_field('footer_hours', $front_page_id) ?: '00:00 - 23:00';
?>

<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <hr class="footer-top-line footer-top-line--left">
            <div class="site-logo">
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
            <hr class="footer-top-line footer-top-line--right">
        </div>
    </div>

    <div class="footer-main">
        <div class="container">

            <div class="footer-nav">
                <a href="#">Голф</a>
                <a href="#">Настаняване</a>
                <a href="#">Специални оферти</a>
                <a href="#">Ресторант и бар</a>
                <a href="#">Сватби</a>
                <a href="#">Срещи и събития</a>
                <a href="#">Спорт и уелнес</a>
                <a href="#">Достъп за членове</a>
                <a href="#">Новини</a>
            </div>

            <div class="footer-center">
                <h3 class="footer-club-name"><?php echo esc_html($club_name); ?></h3>
                <p><?php echo esc_html($address); ?></p>
                <p><?php echo esc_html($city); ?></p>

                <h4 class="footer-contacts-title">Контакти</h4>
                <p>Телефон: <?php echo esc_html($phone); ?></p>
                <p>Имейл: <?php echo esc_html($email); ?></p>
                <p>Работно време: <?php echo esc_html($hours); ?></p>

                <div class="footer-icons">
                    <a href="#"><i class="ph ph-facebook-logo"></i></a>
                    <a href="#"><i class="ph ph-instagram-logo"></i></a>
                    <a href="#"><i class="ph ph-x-logo"></i></a>
                </div>
            </div>

            <div class="footer-partners">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/titleist.png" alt="Titleist">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner2.png" alt="Partner">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/callaway.png" alt="Callaway">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/golf.png" alt="Golf">
            </div>

        </div>
    </div>
    <hr class="footer-divider">
    <div class="footer-bottom">
        <div class="container">
            <a href="#">Touched by TouchPoint LTD</a>
            <a href="#">Политика за поверителност</a>
            <a href="#">Политика за "Бисквитки"</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>