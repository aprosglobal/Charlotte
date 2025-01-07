<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  wp_head();
  ?>
</head>

<body>

  <header class="md:px-100 px-20 w-full h-86 flex items-center justify-between fixed z-500 top-0 left-0 bg-white">
    <div class="md:[&_img]:w-200 [&_img]:w-150 [&_img]:h-auto [&_img]:onject-contain">
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
    <div class="relative block md:hidden">
      <div class="w-30 h-30  rounded-full flex justify-center items-center bg-rojo btn-menu-mobile">
        <div style="background-image:url('https://apros-qa.net.pe/charlotte/wp-content/uploads/2025/01/elipsis.png')"
          class="w-20 h-20 bg-contain bg-norepet"></div>
      </div>
      <div class="absolute top-50 right-0 bg-crema w-auto menu-mobile h-0 overflow-hidden transition-all">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'primary',
            'container_class' => "menu-primary-container",
            'container' => 'nav',
            'menu_class' => "[&_a]:text-mostaza [&_a]:font-600 [&_a]:text-16 [&_a]:font-oswald, hover:[&_a]:text-naranja ul-menu-mobile",
          )
        );
        ?>
      </div>
    </div>
    <div class="p-20 hidden"></div>
  </header>