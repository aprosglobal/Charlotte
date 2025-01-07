<?php
$footer = get_field('footer', 'option');
wp_footer();
?>

<footer id="div-footer"
  class="w-full md:h-80 h-auto px-18 bg-naranja flex md:flex-row flex-col justify-between items-center md:py-0 py-20">
  <p class="text-16 text-white"><?= $footer["text_left"] ?></p>
  <div class="h-full flex justify-between items-center gap-8">
    <?php
    if ($footer["social_nets"]):
      foreach ($footer["social_nets"] as $red): ?>
        <a href="<?= $red["url_red"] ?>" class="h-35 w-35 rounded-8 bg-azul flex justify-center items-center group">
          <div style="background-image: url('<?= $red["boton"] ?>');"
            class="h-20 w-20 bg-contain bg-norepeat group-hover:mix-blend-difference">
          </div>
        </a>
        <?php
      endforeach;
    endif;
    ?>
    <a href="<?= $footer["libro_reclamaciones"]['url'] ?>" target="<?= $footer["libro_reclamaciones"]['target'] ?>"
      class="px-12 py-8 rounded-5 border-1 border-solid border-white text-white font-600 hover:bg-azul !text-white flex gap-8 items-center">
      <?= $footer["libro_reclamaciones"]['title'] ?>
      <div
        style="background-image:url('https://apros-qa.net.pe/charlotte/wp-content/uploads/2025/01/book_1161120-1.png')"
        class="w-20 h-20 bg-cover bg-norepeat">
      </div>
    </a>
  </div>
</footer>