<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="<?= get_template_directory_uri(); ?>/assets/fonts/tt-firs-neue-700.woff2" as="font" type="font/woff2" crossorigin>
  <style id="critical-css">
    body {
      margin: 0;
      background-color: #000;
      background-image: url('<?= get_template_directory_uri() ?>/assets/images/hero.jpg');
      background-size: cover;
      background-position: center bottom;
      background-repeat: no-repeat;
      min-height: 100vh;
      color: #fff;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Tektur:wght@600&display=swap" rel="stylesheet">
  <link href="<?= get_template_directory_uri() ?>/style.css" rel="stylesheet">
  <?php wp_head() ?>
</head>

<body <?php body_class('bg-black text-white overflow-x-hidden') ?>>

<!-- DESKTOP LEFT MENU -->
<header class="w-full flex flex-row p-4 fixed max-lg:w-full max-lg:justify-between z-50">
  <div class="lg:w-1/2 flex flex-row">
    <!-- LOGO -->
    <div class="mounty-logo lg:w-1/3 lg:pt-1">
      <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="MOUNTY" class="h-8" />
    </div>

    <!-- MAIN TITLE -->
    <div class="max-lg:hidden tektur text-[14px] leading-5 w-2/3">
      <span class="max-w-[210px] inline-block">
        <?= __('Сервіс подорожей кращими місцями карпат', 'mounty') ?>
      </span>
    </div>
  </div>

  <div class="lg:w-1/2 flex flex-row justify-between">
    <!-- DESKTOP SOCIAL LINKS -->
    <div class="flex flex-row gap-4 max-lg:hidden">
      <?php foreach (get_icon_examples() as $icon => $url): ?>
        <a
          href="<?= esc_url($url) ?>"
          target="_blank"
          rel="noopener"
          aria-label="<?= $icon ?>"
          class="opacity-80 hover:opacity-100 transition"
        >
          <img
            src="<?= get_template_directory_uri() ?>/assets/icons/social/<?= $icon ?>.svg"
            alt="<?= $icon ?>"
            class="w-6 h-6"
          >
        </a>
      <?php endforeach ?>
    </div>

    <!-- LANGUAGE SWITCHER (DESKTOP) -->
    <?php if (function_exists('get_languages_example')): //icl_get_languages ?>
        <div class="text-xs uppercase tracking-wide space-x-1 max-lg:hidden">
          <?php foreach (get_languages_example() as $language): ?>
            <a
              href="<?= esc_url($language['url']) ?>"
              class="<?= $language['active'] ? 'bg-white text-black' : '' ?> p-2 font-bold inline-block"
            >
              <?= esc_html(strtoupper($language['native_name'])) ?>
            </a>
          <?php endforeach ?>
        </div>
    <?php endif ?>

    
    <!-- MOBILE BURGER BUTTON -->
    <button
      id="burger"
      class="
        lg:hidden
        w-8 h-8
        bg-[#DD3030]
        flex items-center justify-center
        text-lg
        cursor-pointer
      "
      aria-label="<?= esc_attr__('Open menu', 'mounty') ?>"
      aria-expanded="false"
    >
      ☰
    </button>
  </div>
</header>

<!-- MOBILE MENU -->
<div
  id="mobileMenu"
  class="
    fixed
    inset-0
    bg-black
    z-40
    lg:hidden
    flex-col
    p-8
  "
>
  <!-- NAV -->
  <nav class="space-y-6 text-2xl uppercase flex flex-col mt-12">
    <?php get_template_part('parts/menu') ?>
  </nav>

  <!-- LANGUAGE SWITCHER (MOBILE) -->
  <?php if (function_exists('get_languages_example')): //icl_get_languages ?>
    <div class="mt-10 border-t border-white/20 pt-4 text-sm uppercase">
      <?php foreach (get_languages_example() as $lang): ?>
        <a
          href="<?= esc_url($lang['url']) ?>"
          class="mr-4 <?= $lang['active'] ? 'font-bold' : 'opacity-60' ?>"
        >
          <?= esc_html(strtoupper($lang['native_name'])) ?>
        </a>
      <?php endforeach ?>
    </div>
  <?php endif ?>

  <!-- SOCIAL LINKS -->
  <div class="mt-auto flex gap-4 pt-6">
    <?php foreach (get_icon_examples() as $icon => $url): ?>
      <a href="<?= esc_url($url) ?>" target="_blank" rel="noopener" aria-label="<?= $icon ?>">
        <img
          src="<?= get_template_directory_uri() ?>/assets/icons/social/<?= $icon ?>.svg"
          alt="<?= $icon ?>"
          class="w-6 h-6"
        >
      </a>
    <?php endforeach ?>
  </div>
</div>
