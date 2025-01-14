<!DOCTYPE html>
<html lang="es">

<head>
  <?php
  wp_head();
  ?>
</head>

<?php
// Obtén la URI de la solicitud
$currentUrl = $_SERVER['REQUEST_URI'];
$activo = false;
$logo_activo = false;

// Verifica si contiene la palabra "concesionarios"
if (strpos($currentUrl, 'concesionarios') !== false) {
  // Ejecuta el código si "concesionarios" está presente en la URL
  $activo = true;
  $logo_activo = false;
} elseif (strpos($currentUrl, 'libro-de-reclamaciones') !== false) {
  // Ejecuta el código si "concesionarios" está presente en la URL
  $activo = true;
  $logo_activo = true;
} else {
  // Ejecuta el código si "concesionarios" no está presente en la URL
  $activo = false;
  $logo_activo = true;
}
?>

<body>

  <header
    class="md:px-100 px-20 w-full h-86 flex items-center <?= ($activo != true) ? 'justify-between' : 'justify-center' ?> fixed z-500 top-0 left-0 bg-white">
    <div class="md:[&_img]:w-200 [&_img]:w-150 [&_img]:h-auto [&_img]:onject-contain">
      <?php
      if (function_exists('get_custom_logo')) {
        if ($logo_activo) {
          the_custom_logo(); // Muestra el logo con enlace al home
        } else {
          $custom_logo_id = get_theme_mod('custom_logo');
          if ($custom_logo_id) {
            echo wp_get_attachment_image($custom_logo_id, 'full'); // Muestra solo la imagen
          }
        }
      }
      ?>

    </div>
    <?php if ($activo != true): ?>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container_class' => "menu-primary-container md:block hidden",
          'container' => 'nav',
          'menu_class' => "flex gap-20 [&_a]:text-black [&_a]:font-oswald [&_a]:font-600 [&_a]:text-18 hover:[&_a]:text-naranja",
        )
      );
      ?>

      <div class="relative block md:hidden">
        <div class="w-30 h-30  rounded-full flex justify-center items-center bg-rojo btn-menu-mobile">
          <div style="background-image:url('https://apros-qa.net.pe/charlotte/wp-content/uploads/2025/01/elipsis.png')"
            class="w-20 h-20 bg-contain bg-norepet"></div>
        </div>
        <div class="absolute top-50 right-0 bg-naranja w-auto menu-mobile h-0 overflow-hidden transition-all">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container_class' => "menu-primary-container",
              'container' => 'nav',
              'menu_class' => "[&_a]:text-white [&_a]:font-oswald [&_a]:font-600 [&_a]:text-20  hover:[&_a]:text-naranja ul-menu-mobile",
            )
          );
          ?>
        </div>
      </div>
      <div class="p-20 hidden"></div>
    <?php endif ?>
  </header>