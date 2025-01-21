<?php

/**
 * Template Name: Politicas de privacidad
 */
get_header();
?>
<section class="container my-86">
  <h1 class="text-center font-bold font-frank md:text-35 text-25 leading-104% "><?php the_title(); ?></h1>
  <div
    class="w-full [&_*]:md:text-18 [&_*]:text-16 [&_*]:leading-126% [&_h2]:my-15 [&_h2]:md:text-25 [&_h2]:text-20 [&_h2]:font-600 [&_strong]:font-700 [&_p]:mt-20 [&_ul]:list-disc [&_ul]:ml-20">

    <?php the_content(); ?>

  </div>

</section>
<?php
get_footer();
?>