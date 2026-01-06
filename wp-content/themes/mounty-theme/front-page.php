<?php get_header() ?>

<main class="hero min-h-screen flex flex-row">

  <!-- NAVIGATION -->
  <nav class="lg:w-1/2 !lg:hidden flex flex-col justify-center text-[16px] uppercase pl-4">
    <?php get_template_part('parts/menu') ?>
  </nav>

  <!-- CTA -->
  <div class="hero-content lg:w-1/2 !lg:px-4 flex flex-col justify-center">
      <div class="grow-0 flex">
        <span class="sm:text-[48px] md:text-[64px] lg:text-8xl">
          <?= __('МААААМ, Я<br>В КАРПАТИ', 'mounty'); ?>
          <a
            href="#"
            class="mt-6 inline-block bg-white text-black text-[16px] px-6 py-3 font-bold sm:w-auto"
          >
            <?= __('ДІЗНАТИСЯ БІЛЬШЕ', 'mounty') ?>
          </a>
        </span>
      </div>
  </div>
</main>

<?php get_footer() ?>
