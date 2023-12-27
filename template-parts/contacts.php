<section class="contacts">
    <div class="container --not-mobile">
        <h2 class="contacts__title">Контакты    </h2>
        <div class="contacts__container">
            <div class="contacts__form">
                <div class="contacts__info">
                    <div class="contact-info">
                        <div class="contact-info__title"> <?php echo get_bloginfo('name'); ?> </div>
                        <div class="contact-info__box">
                            <div class="contact-info__label">Телефон:</div>
                            <div class="contact-info__data"><?php the_field( 'phone', ID_CONTACTS); ?></div>
                        </div>
                        <div class="contact-info__box">
                            <div class="contact-info__label">E-mail:</div>
                            <div class="contact-info__data"><?php the_field( 'email', ID_CONTACTS) ?></div>
                        </div>
                        <div class="contact-info__text"><?php the_field( 'adress', ID_CONTACTS) ?></div>
                        <div class="contact-info__text"><?php the_field( 'work_time', ID_CONTACTS) ?></div>
                    </div>
                </div>

                <div class="contacts__feedback">
                    <?php
                        echo do_shortcode('[contact-form-7 id="814b1fe" title="Форма обратной связи"]');
                    ?>
                </div>

            </div>
            <div class="contacts__map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9c6021df679aea2b8498e6367dcb1035ac91e677a760d9c8848394c31def507b&amp;source=constructor" width="100%" height="720" frameborder="0"></iframe></div>
        </div>
    </div>
</section>