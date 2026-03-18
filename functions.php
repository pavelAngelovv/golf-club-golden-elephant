<?php
function golf_club_setup()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'Primary Menu',
    ]);
}
add_action('after_setup_theme', 'golf_club_setup');

function golf_club_enqueue_scripts()
{
    wp_enqueue_style(
        'phosphor-icons-regular',
        'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css',
        [],
        null
    );
    wp_enqueue_style(
        'phosphor-icons-bold',
        'https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/bold/style.css',
        [],
        null
    );
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Poiret+One&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'golf-club-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0.0'
    );
    wp_enqueue_script(
        'golf-club-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'golf_club_enqueue_scripts');

function golf_club_nav_icons($items, $args)
{
    if ($args->theme_location !== 'primary') {
        return $items;
    }

    $icons = [
        'Вечеря' => 'ph-chef-hat',
        'Нощувка' => 'ph-bed',
        'Голф' => 'ph-flag-pennant',
    ];

    foreach ($icons as $label => $icon) {
        $items = str_replace(
            '>' . $label . '<',
            '><i class="ph ' . $icon . '"></i> ' . $label . '<',
            $items
        );
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'golf_club_nav_icons', 10, 2);

function golf_club_register_cpt_tournament()
{
    $labels = [
        'name' => 'Tournaments',
        'singular_name' => 'Tournament',
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'rewrite' => ['slug' => 'tournaments'],
        'has_archive' => false,
        'menu_icon' => 'dashicons-awards',
        'supports' => ['title'],
        'show_in_rest' => true,
    ];

    register_post_type('tournament', $args);
}
add_action('init', 'golf_club_register_cpt_tournament');

function golf_club_acf_fields()
{
    if (!function_exists('acf_add_local_field_group'))
        return;

    acf_add_local_field_group([
        'key' => 'group_homepage',
        'title' => 'Homepage Content',
        'fields' => [
            [
                'key' => 'field_hero_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_image',
                'type' => 'image',
                'return_format' => 'url',
            ],
            [
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Турнири',
            ],
            [
                'key' => 'field_hero_subtitle',
                'label' => 'Hero Subtitle',
                'name' => 'hero_subtitle',
                'type' => 'text',
                'default_value' => 'Играй с духа на шампионите',
            ],
            [
                'key' => 'field_about_title',
                'label' => 'About Title',
                'name' => 'about_title',
                'type' => 'text',
                'default_value' => 'Духът на голфа',
            ],
            [
                'key' => 'field_about_text_1',
                'label' => 'About Text (first paragraph)',
                'name' => 'about_text_1',
                'type' => 'textarea',
                'default_value' => 'Голф турнирите са сред най-очакваните събития в календара на всеки клуб. Те събират любители и професионалисти от страната и чужбина, обединени от страстта към играта и състезателния дух.',
            ],
            [
                'key' => 'field_about_text_2',
                'label' => 'About Text (second paragraph)',
                'name' => 'about_text_2',
                'type' => 'textarea',
                'default_value' => 'Всяко събитие се организира с внимание към детайла и следва утвърдени стандарти на спортменство и престиж, които допринасят за високото ниво и атмосферата на турнира.',
            ],
        ],
        'location' => [
            [['param' => 'page_type', 'operator' => '==', 'value' => 'front_page']],
        ],
    ]);
    acf_add_local_field_group([
        'key' => 'group_tournament',
        'title' => 'Tournament Details',
        'fields' => [
            [
                'key' => 'field_tournament_start_date',
                'label' => 'Tournament Start Date',
                'name' => 'tournament_start_date',
                'type' => 'date_picker',
                'display_format' => 'd/m/Y',
                'return_format' => 'Ymd',
            ],
            [
                'key' => 'field_tournament_end_date',
                'label' => 'Tournament End Date',
                'name' => 'tournament_end_date',
                'type' => 'date_picker',
                'display_format' => 'd/m/Y',
                'return_format' => 'Ymd',
                'required' => 0,
            ],
            [
                'key' => 'field_tournament_image',
                'label' => 'Tournament Image',
                'name' => 'tournament_image',
                'type' => 'image',
                'return_format' => 'url',
            ],
        ],
        'location' => [
            [['param' => 'post_type', 'operator' => '==', 'value' => 'tournament']],
        ],
    ]);
}
add_action('acf/init', 'golf_club_acf_fields');