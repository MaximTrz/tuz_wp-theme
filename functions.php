<?php

    define('TUZ_PATH_JS', get_template_directory_uri() .'/assets/js/');
    define('TUZ_PATH_CSS', get_template_directory_uri() .'/assets/css/');
    define('ID_CONTACTS', 15);
    define('ID_ABOUT', 184);

    add_theme_support( 'post-thumbnails' );

    add_action('init', function(){

        register_post_type('billboard', [
            'labels' => [
                'name'               => 'Афиша',
                'singular_name'      => 'Афиша',
                'add_new'            => 'Добавить событие',
                'add_new_item'       => 'Добавить событие',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новое событие',
                'view_item'          => 'Просмотреть',
                'search_items'       => 'Найти',
                'not_found'          =>  'Событий не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Афиша'
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title']
        ]);

        register_post_type('peoples', [
            'labels' => [
                'name'               => 'Люди театра',
                'singular_name'      => 'Сотрудник',
                'add_new'            => 'Добавить сотрудника',
                'add_new_item'       => 'Добавить сотрудника',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новый сотрудник',
                'view_item'          => 'Просмотреть',
                'search_items'       => 'Найти',
                'not_found'          =>  'Сотрудников не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Люди театра'
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail']
        ]);

        register_post_type('news', [
            'labels' => [
                'name'               => 'Новости',
                'singular_name'      => 'Новость',
                'add_new'            => 'Добавить новость',
                'add_new_item'       => 'Добавить новость',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новая новость',
                'view_item'          => 'Просмотреть',
                'search_items'       => 'Найти',
                'not_found'          =>  'Новостей не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Новости'
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor']
        ]);

        register_post_type('plays', [
            'labels' => [
                'name'               => 'Спектакли',
                'singular_name'      => 'Спектакль',
                'add_new'            => 'Добавить спектакль',
                'add_new_item'       => 'Добавить спектакль',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новый спектакль',
                'view_item'          => 'Просмотреть',
                'search_items'       => 'Найти',
                'not_found'          =>  'Спектаклей не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Спектакли'
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail']
        ]);

        register_post_type('main_slider', [
            'labels' => [
                'name'               => 'Слайды',
                'singular_name'      => 'Слайд',
                'add_new'            => 'Добавить слайд',
                'add_new_item'       => 'Добавить слайд',
                'edit_item'          => 'Редактировать',
                'new_item'           => 'Новый слайд',
                'view_item'          => 'Просмотреть',
                'search_items'       => 'Найти',
                'not_found'          =>  'Слайды не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Слайды главной страницы'
            ],
            'public' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail']
        ]);

    });


    function custom_posts_per_page( $query ) {
        if ( $query->is_main_query() && ! is_admin() ) {
            if ( $query->is_post_type_archive( 'peoples' ) ) {
                $query->set( 'posts_per_page', 16 ); // Здесь можно задать нужное количество записей
            }
            if ( $query->is_post_type_archive( 'news' ) ) {
                $query->set( 'posts_per_page', 12 ); // Здесь можно задать нужное количество записей
            }
            if ( $query->is_post_type_archive( 'billboard' ) ) {
                $query->set( 'posts_per_page', 15 ); // Здесь можно задать нужное количество записей
            }
            if ( $query->is_post_type_archive( 'plays' ) ) {
                $query->set( 'posts_per_page', 12 ); // Здесь можно задать нужное количество записей
            }
        }
    }

    add_action( 'pre_get_posts', 'custom_posts_per_page' );

    add_action('admin_menu', function (){
        remove_menu_page('edit-comments.php'); // Удаляет пункт "Комментарии";
    });

    add_action('wp_enqueue_scripts', function () {
        wp_deregister_script('jquery');
    });


    add_action('wp_enqueue_scripts', function (){

        // Подключаем jQuery с высоким приоритетом (значение 1)
        wp_enqueue_script('jquery', TUZ_PATH_JS.'jquery-3.7.0.min.js', array(), false, 1);

        // Подключаем стили и скрипты, которые зависят от jQuery
        wp_enqueue_style('swiper-css', TUZ_PATH_CSS.'swiper-bundle.min.css', false);
        wp_enqueue_script('main-script', TUZ_PATH_JS.'bundle.js', array('jquery'), false);
        wp_enqueue_script('swiper', TUZ_PATH_JS.'swiper-bundle.min.js', false);

        // Подключаем главные стили
        wp_enqueue_style('main-style', get_stylesheet_uri(), array(), false);
    });

    add_action( 'after_setup_theme', 'theme_register_nav_menu' );

    function theme_register_nav_menu() {
        register_nav_menu( 'header', 'Меню в шапке' );
        register_nav_menu( 'footer', 'Меню в подвале' );
    }

    add_filter( 'nav_menu_css_class', function ($classes, $menu_item, $args, $depth) {

        if ($args->theme_location === 'header') {
            $newClasses = ['main-menu__item'];

            // Получаем все элементы меню для текущего местоположения
            $menu_items = wp_get_nav_menu_items($args->menu);

            // Получаем ID последнего элемента меню
            $last_menu_item_id = end($menu_items)->ID;

            // Проверяем, является ли текущий элемент последним элементом меню
            if ($menu_item->ID === $last_menu_item_id) {
                $newClasses[] = '--contact ';
                $phone = get_field('phone', ID_CONTACTS);
                $menu_item->title .= '<a class="main-menu__link --contact bvi-hide" href="tel: ' . $phone . '">' . $phone . '</a>';
            }
        }

        if ($args->theme_location === 'footer') {
            $newClasses = ['footer__menu-item bvi-no-styles'];
        }

        if (isset($newClasses)) {
            return $newClasses;
        }

        return $classes;
    }, 10, 4 );


    add_filter( 'nav_menu_link_attributes', function ($atts, $menu_item, $args, $depth){

        if ($args->theme_location === 'header'){
            $atts['class'] = 'main-menu__link';
        }
        if ($args->theme_location === 'footer'){
            $atts['class'] = 'footer__menu-link bvi-no-styles';
        }

        return $atts;
    }, 10, 4 );