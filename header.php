<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  wp_head();
  ?>
</head>

<body>

  <header class="px-100 w-full h-86 flex items-center justify-between fixed z-500 top-0 left-0 bg-white">
    <div class="[&_img]:w-148 [&_img]:h-auto [&_img]:onject-contain">
      <?php if (function_exists('the_custom_logo')) {
        the_custom_logo();
      } ?>
    </div>
    <?php
    wp_nav_menu(
      array(
        'theme_location' => 'primary',
        'container_class' => "menu-primary-container md:block hidden",
        'container' => 'nav',
        'menu_class' => "flex gap-20 [&_a]:text-black [&_a]:font-600 [&_a]:text-18 [&_a]:font-oswald, hover:[&_a]:text-naranja",
      )
    );
    ?>
  </header>