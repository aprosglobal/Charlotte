<?php
get_header();
?>
<section class="h-100vh w-full flex justify-center items-center gap-30">
  <div class="w-auto h-auto">
    <h1 class="text-200 font-700 text-center">404</h1>
    <p class="text-60 font-600 text-center mb-30">Página no encontrada</p>
    <div class="flex justify-center items-center">
      <a href="<?= home_url() ?>" class="py-20 px-20 rounded-8 bg-azul text-white hover:text-white mx-auto">Volver a
        Charlotte</a>
    </div>
  </div>
</section>
<?php
get_footer();
