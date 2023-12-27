<!DOCTYPE html>
<html <?php language_attributes() ?>
<head>
    <title><?php echo wp_get_document_title() ?></title>
    <?php wp_head() ?>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
</head>
<body>
<header class="header bvi-no-styles">
    <div class="container --not-mobile bvi-no-styles">
        <div class="header__container bvi-no-styles"><a class="header__logo bvi-no-styles" href="<?php home_url() ?>/"></a>
            <nav class="header__nav bvi-no-styles">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header',
                    'menu_class' => 'main-menu bvi-no-styles',
                    'container'       => false
                ])
                ?>
                <div class="header__burger bvi-no-styles"><a class="burger-btn bvi-no-styles" href="№"><span class="burger-btn__line bvi-no-styles"></span></a></div>
            </nav>
        </div>
    </div>
</header>

<main>

