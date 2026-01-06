<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
</head>

<body class="bg-black text-white overflow-x-hidden">

<header class="fixed inset-y-0 left-0 hidden lg:flex flex-col w-24 p-4 z-50">
  <div class="font-bold text-xl tracking-wide"><?= __('MOUNTY') ?></div>

  <nav class="mt-10 space-y-4 text-xs uppercase">
    <?php get_template_part('parts/menu'); ?>
  </nav>
</header>

<button id="burger" class="lg:hidden fixed top-4 right-4 z-50 w-10 h-10 border border-white">
  ≡
</button>

<div
  id="mobileMenu"
  class="fixed inset-0 bg-black p-8 z-40 hidden flex-col"
>
  <nav class="space-y-6 text-2xl">
    <?php get_template_part('parts/menu'); ?>
  </nav>

  <div class="mt-auto flex gap-4">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/instagram.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/facebook.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/whatsapp.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/telegram.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/twitter.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/youtube.svg" class="w-6">
    <img src="<?= get_template_directory_uri(); ?>/assets/icons/social/tiktok.svg" class="w-6">
  </div>
</div>
