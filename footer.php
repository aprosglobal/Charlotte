<?php
$footer = get_field('footer', 'option');
wp_footer();
?>

<footer class="w-full h-80 px-18 bg-naranja flex justify-between items-center">
  <p class="text-16 text-white"><?= $footer["text_left"] ?></p>
  <div class="h-full flex justify-between items-center gap-8">
    <?php
    if ($footer["social_nets"]):
      foreach ($footer["social_nets"] as $red): ?>
        <a href="<?= $red["url_red"] ?>">
          <div style="background-image: url('<?= $red["boton"] ?>');" class="h-30 w-30 rounded-5 bg-cover bg-norepeat">
          </div>
        </a>
      <?php
      endforeach;
    endif;
    ?>
    <a href="<?= $footer["libro_reclamaciones"]['url'] ?>" target="<?= $footer["libro_reclamaciones"]['target'] ?>"
      class="px-10 py-6 rounded-5 border-1 border-solid border-white text-white font-600">
      <?= $footer["libro_reclamaciones"]['title'] ?>
    </a>
  </div>
</footer>