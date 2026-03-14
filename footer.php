<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <hr class="footer-top-line footer-top-line--left">
            <div class="site-logo">
                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo home_url(); ?>">Golf Club</a>
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
                <h3 class="footer-club-name">Голф клуб "Златният слон"</h3>
                <p>м-ст Старата чешма, ул. „Игрището" 12</p>
                <p>Бяла река 2425, България.</p>

                <h4 class="footer-contacts-title">Контакти</h4>
                <p>Телефон: +359 889 999 099</p>
                <p>Имейл: hello@goldenelephant.com</p>
                <p>Работно време: 00:00- 23:00</p>

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
            <span>Touched by TouchPoint LTD</span>
            <a href="#">Политика за поверителност</a>
            <a href="#">Политика за "Бисквитки"</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>