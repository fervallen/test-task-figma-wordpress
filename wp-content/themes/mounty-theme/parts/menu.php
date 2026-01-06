<?php //should be done with wp_nav_menu() ?>
<?php foreach(get_menu_examples() as $name => $url): ?>
  <a href="<?= esc_url($url) ?>"><?= __($name) ?></a>
<?php endforeach ?>
