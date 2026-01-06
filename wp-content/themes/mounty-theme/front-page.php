<?php get_header() ?>

<main class="hero min-h-screen flex flex-row">

  <!-- NAVIGATION -->
  <nav class="lg:w-1/2 max-lg:hidden flex flex-col justify-center text-[16px] uppercase pl-4">
    <?php get_template_part('parts/menu') ?>
  </nav>

  <!-- CTA -->
  <div class="
    hero-content
    flex flex-col
    max-lg:w-full
    max-lg:px-4
    max-lg:mt-auto
    max-lg:items-center
    lg:w-1/2 
    lg:justify-center
  ">
      <div class="lg:grow-0 flex max-lg:pb-4">
        <span class="max-lg:text-[15vw] lg:text-6xl xl:text-8xl leading-[0.8]">
          <?= __('МААААМ, Я<br>В КАРПАТИ', 'mounty'); ?>
          <a
            href="#"
            class="max-lg:mt-3 lg:mt-6 block text-center bg-white text-black text-[16px] px-6 py-3 font-bold sm:w-auto"
          >
            <?= __('ДІЗНАТИСЯ БІЛЬШЕ', 'mounty') ?>
          </a>
        </span>
      </div>
  </div>
</main>

<?php get_footer() ?>
