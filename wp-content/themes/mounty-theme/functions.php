<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', [], null, false);
  wp_enqueue_script('gsap', 'https://unpkg.com/gsap@3/dist/gsap.min.js', [], null, true);
  wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', ['gsap'], null, true);
});

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('init', function () {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
});

add_action('wp_head', function () {
  $schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      [
        "@type" => "Organization",
        "@id" => home_url('#organization'),
        "name" => get_bloginfo('name'),
        "url" => home_url(),
        "logo" => [
          "@type" => "ImageObject",
          "url" => get_template_directory_uri() . "/assets/images/logo.svg"
        ],
        "sameAs" => [
          "https://instagram.com/yourprofile",
          "https://facebook.com/yourprofile",
          "https://t.me/yourprofile",
          "https://youtube.com/yourprofile"
        ]
      ],
      [
        "@type" => "WebSite",
        "@id" => home_url('#website'),
        "url" => home_url(),
        "name" => get_bloginfo('name'),
        "publisher" => [
          "@id" => home_url('#organization')
        ]
      ]
    ]
  ];

  echo '<script type="application/ld+json">' .
       wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) .
       '</script>';
});

function mounty_theme_setup() {
  load_theme_textdomain('mounty-theme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'mounty_theme_setup');

function get_languages_example(): array {
  return [
    'uk' => [
        'active' => 1,
        'native_name' => 'УКР',
        'url' => '/',
    ],
    'en' => [
        'active' => 0,
        'native_name' => 'ENG',
        'url' => '/en',
    ],
  ];
}

function get_icon_examples(): array {
  return [
    'instagram' => '#',
    'facebook' => '#',
    'whatsapp' => '#',
    'telegram' => '#',
    'twitter' => '#',
    'youtube' => '#',
    'tiktok' => '#',
  ];
}

function get_menu_examples(): array {
 return [
  'Ціни'=> '#',
  'Про Маунті'=> '#',
  'Спорядження'=> '#',
  'Маршрути'=> '#',
  'FAQ'=> '#',
 ];
}
