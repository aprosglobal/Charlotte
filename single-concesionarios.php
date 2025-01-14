<?php
$form = get_field('form');
get_header();
?>
<section class="container mt-86">
  <h1 class="font-500 text-28 text-center text-amarillo"><?= the_title(); ?></h1>
  <p class="font-700 text-35 text-center mt-10">¡Queremos Conocer Tu Opinión!</p>
  <div class="flex justify-center items-center gap-12 mt-10 mb-20">
    <div class="w-22 h-1 bg-amarillo"></div>
    <span class="font-covered text-24 text-amarillo">¡Cuéntanos Qué Piensas!</span>
    <div class="w-22 h-1 bg-amarillo"></div>
  </div>
  <div class="md:w-686 w-full mt-20 bg-azul text-white py-30 px-20 mx-auto">
    <p class="text-white font-500 text-18 text-center">En Charlotte, valoramos cada opinión para seguir mejorando. Si
      tienes
      sugerencias, comentarios o elogios sobre nuestro servicio, compártelos aquí. Este formulario es el medio más
      efectivo para hacernos llegar tus mensajes.</p>
  </div>
  <div class=" mx-auto mt-50 mb-89">
    <?= do_shortcode($form) ?>
  </div>
</section>

<?php get_footer();

