<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
  </head>

  <body>

  <header class="sticky-top">
    <div class = "container">
      <?php wp_nav_menu (
        array(
          'theme_location' => 'top-menu',
          'container'       => 'div',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'navigation',
          'menu_id'         => ''
        )
      );?>
    </div>
  </header>
