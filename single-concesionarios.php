<?php
$form = get_field('form');
$subtitulo = get_field('subtitulo');
$frase = get_field('frase');
$texto = get_field('texto');
get_header();
?>
<section class="container mt-86">
  <h1 class="font-500 text-28 text-center text-amarillo"><?= the_title(); ?></h1>
  <p class="font-700 text-35 text-center mt-10"><?= $subtitulo ?></p>
  <div class="flex justify-center items-center gap-12 mt-10 mb-20">
    <div class="w-22 h-1 bg-amarillo"></div>
    <span class="font-covered text-24 text-amarillo"><?= $frase ?></span>
    <div class="w-22 h-1 bg-amarillo"></div>
  </div>
  <div class="md:w-686 w-full mt-20 bg-azul text-white py-30 px-20 mx-auto">
    <p class="text-white font-500 text-18 text-center"><?= $texto ?></p>
  </div>
  <div class=" mx-auto mt-50 mb-89">
    <?= do_shortcode($form) ?>
  </div>
</section>

<?php get_footer();

