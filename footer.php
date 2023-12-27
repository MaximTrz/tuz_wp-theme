</main>
<footer class="footer bvi-no-styles">
    <div class="container bvi-no-styles">
        <div class="footer__wrapper bvi-no-styles">
            <div class="footer__logo-box bvi-no-styles">
                <a href="<?php home_url() ?>" class="footer__logo bvi-no-styles"></a>
            </div>
            <div class="footer__contacts bvi-no-styles">
                <div class="footer__contacts-title bvi-no-styles">Контакты</div>
                <ul class="footer__contacts-list bvi-no-styles">
                    <li class="footer__contact bvi-no-styles"> <a class="footer__contact-link --phone bvi-no-styles" href="tel:<?php the_field( 'phone', ID_CONTACTS); ?>"><?php the_field( 'phone', 15) ?></a></li>
                    <li class="footer__contact bvi-no-styles"> <span class="footer__contact-link --adress bvi-no-styles"><?php the_field( 'adress', ID_CONTACTS) ?></span></li>
                    <li class="footer__contact bvi-no-styles"> <a class="footer__contact-link --email bvi-no-styles" href="mailto: <?php the_field( 'email', ID_CONTACTS) ?>">teatrmolodegi@yandex.ru</a></li>
                </ul>
            </div>
            <nav class="footer__nav bvi-no-styles">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer__menu bvi-no-styles',
                ]);
                ?>
            </nav>
            <ul class="footer__social-icons bvi-no-styles">
                <li class="footer__social-icon bvi-no-styles"><a class="footer__social-link --vk bvi-no-styles" href="<?php the_field( 'vk', ID_CONTACTS) ?>"></a></li>
                <li class="footer__social-icon bvi-no-styles"><a class="footer__social-link --telegram bvi-no-styles" href="<?php the_field( 'telegram', ID_CONTACTS) ?>"> </a></li>
            </ul>
            <div class="footer_button-box bvi-no-styles"><span class="footer__back-to-top bvi-no-styles"></span></div>
        </div>
    </div>
</footer>
<?php wp_footer();  ?>
</body>
</html>