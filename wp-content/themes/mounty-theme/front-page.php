<?php get_header(); ?>

<main class="relative h-screen">
  <img
    src="<?= get_template_directory_uri(); ?>/assets/images/hero.webp"
    alt="Карпати"
    class="absolute inset-0 w-full h-full object-cover"
  >

  <div class="relative z-10 flex flex-col justify-end h-full p-6 lg:pl-32 pb-24">
    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-none">
      <?= __('МААААМ,<br>Я В КАРПАТИ') ?>
    </h1>

    <a
      href="#"
      class="mt-6 inline-block bg-white text-black px-6 py-3 font-bold w-full sm:w-auto"
    >
      <?= __('ДІЗНАТИСЯ БІЛЬШЕ') ?>
    </a>
  </div>
</main>

<?php get_footer(); ?>
