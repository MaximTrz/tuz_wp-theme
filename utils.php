<?php

function getPeople($amount=-1){

    $posts = get_posts([
        'post_type'   => 'peoples',
        'suppress_filters' => true,
        'orderby' => 'date',
        'order' => 'ASC',
    ]);
    return $posts;
}

// Функция для сортировки записей по времени
function custom_sort($a, $b) {

    $dateA = get_post_meta($a->ID, 'date', true);
    $dateB = get_post_meta($b->ID, 'date', true);

    // Сначала сортируем по полю "date" (как числа)
    if ($dateA != $dateB) {
        return $dateA - $dateB;
    } else {
        // Если "date" равны, сравниваем "time" как время
        $timeA = strtotime(get_post_meta($a->ID, 'time', true));
        $timeB = strtotime(get_post_meta($b->ID, 'time', true));

        if ($timeA && $timeB) {
            return $timeA - $timeB;
        } else {
            // Если преобразование времени не удалось, возвращаем 0 (равные значения)
            return 0;
        }
    }
}

function getRussianMonth($date) {

    $months = [
        1 => 'января',
        2 => 'февраля',
        3 => 'марта',
        4 => 'апреля',
        5 => 'мая',
        6 => 'июня',
        7 => 'июля',
        8 => 'августа',
        9 => 'сентября',
        10 => 'октября',
        11 => 'ноября',
        12 => 'декабря'
    ];

    $monthNumber = intval (date("m", $date));

    if (isset($months[$monthNumber])) {
        return $months[$monthNumber];
    } else {
        return '';
    }
}
function getDayOfWeek($timestamp) {

    $days = [
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
        7 => 'Вс',
    ];

    $dateTime = new DateTime();
    $dateTime->setTimestamp($timestamp);

    $dayOfWeek = $dateTime->format('N');

    if (isset($days[$dayOfWeek])) {
        return $days[$dayOfWeek];
    } else {
        return '';
    }
}

function getTime($timestamt){
    $dateTime = new DateTime();
    $dateTime->setTimestamp($timestamt);
    return $dateTime->format("H:i");;
}