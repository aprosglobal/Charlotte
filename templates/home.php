<?php

/**
 * Template Name: Home
 */
$section_1 = get_field('seccion_1');
$section_2 = get_field('seccion_2');
$section_3 = get_field('seccion_3');
$section_4 = get_field('seccion_4');
$section_5 = get_field('seccion_5');
$section_6 = get_field('seccion_6');
$section_7 = get_field('seccion_7');
$section_8 = get_field('seccion_8');
$section_9 = get_field('seccion_9');
$section_10 = get_field('seccion_10');
$whatsapp = get_field('whatsapp', 'option');

get_header();
?>
<!-- ------------ SECTION 1 ----------------- -->
<section>
  <video src="<?= $section_1["video"] ?>" muted autoplay loop class="w-full"></video>
  <div class="bg-rojo py-72">
    <div class="md:w-590 w-full md:px-0 px-66 mx-auto">
      <h1 class="text-center font-bold font-frank md:text-35 text-20 leading-104% "><?= $section_1["title"] ?></h1>

      <p class="mt-20 md:text-16 text-13 mt-80">
        <?= $section_1["text"] ?>
      </p>
    </div>
  </div>
  <div class="relative [&_img]:w-full [&_img]:h-500 [&_img]:object-cover">
    <?= wp_get_attachment_image($section_1['banner'], 'full') ?>
    <div class="md:p-36 p-29 bg-azul md:w-434 w-244 absolute md:top-118 md:right-246 top-86 right-86">
      <p class="text-13 text-white italic">
        <?= $section_1["text_banner"] ?>
      </p>
    </div>
  </div>
</section>
<!-- ------------ SECTION 2 ----------------- -->
<section id="servicios" class="mt-107">
  <div class="md:container">
    <h2 class="text-center md:px-0 px-66"><?= $section_2["title"] ?></h2>
    <div class="flex justify-center items-center gap-12 mt-55">
      <div class="w-22 h-1 bg-amarillo"></div>
      <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_2["phrase"] ?></span>
      <div class="w-22 h-1 bg-amarillo"></div>
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-20 mt-78">

      <?php
      if ($section_2["servicios"]):
        foreach ($section_2["servicios"] as $servicio):
          ?>
          <figure
            class="relative md:w-433 md:h-325 w-full h-auto group [&_img]:w-full [&_img]:h-full [&_img]:object-cover overflow-hidden">
            <?= wp_get_attachment_image($servicio['image'], 'full') ?>
            <figcaption
              class="absolute z-10 md:top-230 top-145 left-0 md:w-433 w-full h-full md:p-40 px-36 py-18 bg-black/30 duration-300 group-hover:top-0 group-hover:h-full group-hover:bg-black/50 flex flex-col justify-start group-hover:justify-end transition-all">
              <h3 class="text-naranja mb-2rem" style="text-shadow: #FC0 1px 0 10px;"><?= $servicio["title"] ?></h3>
              <p class="md:text-16 text-13 text-white"><?= $servicio["text"] ?>
              </p>
            </figcaption>
          </figure>
          <?php
        endforeach;
      endif; ?>
    </div>
  </div>
  <div class="px-80 mt-90 md:px-313 bg-rojo">
    <div id="carousel" class="splide w-full">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          if ($section_2["marcas"]):
            foreach ($section_2["marcas"] as $marca):
              ?>
              <li class="splide__slide [&_img]:w-150 [&_img]:h-150 [&_img]:object-contain">
                <?= wp_get_attachment_image($marca['logo_marca'], 'full') ?>
              </li>
              <?php
            endforeach;
          endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- --------------------------------------------- -->
<!-- ---------------- SECTION 3 ------------------ -->
<section id="nosotros" class="container mt-110">
  <div class="flex md:flex-row flex-col gap-100">
    <div class="md:w-50% w-full">
      <h2><?= $section_3["title"] ?></h2>
      <div class="flex justify-start items-center gap-12 my-53">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_3["phrase"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <p class="text-left md:text-16 text-13">
        <?= $section_3["paragraphs"] ?>
      </p>

    </div>
    <div class="md:w-50% w-full">
      <figure class="h-full flex flex-col gap-30 justify-center [&_img]:h-422 [&_img]:w-full [&_img]:object-cover">
        <?= wp_get_attachment_image($section_3['image'], 'full') ?>
        <figcaption class="bg-azul text-white mt-20 w-full h-auto p-34">
          <p class="text-15 italic">
            <?= $section_3["text_image"] ?>
          </p>
        </figcaption>
      </figure>

    </div>
  </div>
</section>
<!-- ------------------ SECTION 4 ----------------- -->
<section class="mt-93">
  <div class="flex md:flex-row flex-col bg-naranja ">
    <div class="md:w-50% w-full grid items-center md:pl-233 pl-68 md:pr-60 pr-18 md:py-0 py-39">
      <div>
        <h2 class="MyV relative inline-block text-white"><?= $section_4["mision_title"] ?></h2>
        <p class="md:text-16 text-13 text-white"><?= $section_4["mision_text"] ?></p>
        <h2 class="MyV2 relative inline-block text-white mt-20"><?= $section_4["vision_title"] ?></h2>
        <p class="md:text-16 text-13 text-white"><?= $section_4["vision_text"] ?></p>
      </div>
    </div>
    <div class="md:w-50% w-full [&_img]:w-full [&_img]:h-523 [&_img]:object-cover">
      <?= wp_get_attachment_image($section_4['image'], 'full') ?>
    </div>
</section>
<!-- ------------------ SECTION 5 ----------------- -->
<section class="container my-166">
  <div class="flex md:flex-row flex-col h-fit">
    <div
      class="md:w-50% w-full flex  items-center justify-center [&_img]:md:w-435 [&_img]:md:h-305 [&_img]:w-full [&_img]:h-auto [&_img]:object-cover">
      <?= wp_get_attachment_image($section_5['image'], 'full') ?>
    </div>
    <div class="md:w-50% w-full items-center">
      <div>
        <h2 class="text-center"><?= $section_5["title"] ?></h2>
        <div class="flex justify-center items-center gap-12 my-43">
          <div class="w-22 h-1 bg-amarillo"></div>
          <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_5["phrase"] ?></span>
          <div class="w-22 h-1 bg-amarillo"></div>
        </div>
        <p class="text-center md:text-16 text-13"><?= $section_5["text"] ?></p>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ SECTION 6 ----------------- -->
<section class="bg-azul pb-120">
  <div class="w-full overflow-x-hidden">
    <div class="flex justify-center items-center gap-12 mt-60 mb-20">
      <div class="w-22 h-1 bg-cafe"></div>
      <span class="font-covered md:text-20 text-16 text-naranja"><?= $section_6["phrase"] ?></span>
      <div class="w-22 h-1 bg-cafe"></div>
    </div>
    <h2 class="text-center text-white mb-60"><?= $section_6["title"] ?></h2>

    <div class="timeline" data-aos="fade-up">
      <div class="slider-linea-container">

        <div class="splide" id="slider-linea">
          <div class="splide__track">
            <ul class="splide__list">
              <?php
              if ($section_6["time_line"]):
                foreach ($section_6["time_line"] as $idx => $time):
                  ?>
                  <li class="splide__slide">
                    <div
                      class="card-linea__item <?= (($idx + 1) % 2 == 1) ? 'impar' : 'par'; ?> [&_img]:flex-shrink-0 [&_img]:w-100 [&_img]:md:w-200 [&_img]:h-100 [&_img]:md:h-200 [&_img]:mx-auto [&_img]:object-cover ">

                      <?= wp_get_attachment_image($time['image'], 'full') ?>
                      <div>
                        <div class="text-25 md:text-35 leading-25 md:leading-35 font-bold mb-5 md:mb-15 font-secondary">
                          <?= $time["year"] ?>
                        </div>
                        <div class="card-linea__item-text text-12 md:text-14 leading-16 md:leading-19 max-w-202">
                          <?= $time["text"] ?>
                        </div>
                      </div>
                    </div>
                  </li>
                  <?php
                endforeach;
              endif;
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ SECTION 7 ----------------- -->
<section id="calidad" class="container mt-104">
  <h2 class="text-center font-bold"><?= $section_7["title"] ?></h2>
  <div class="flex justify-center items-center gap-12 my-47">
    <div class="w-22 h-1 bg-amarillo"></div>
    <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_7["phrase"] ?></span>
    <div class="w-22 h-1 bg-amarillo"></div>
  </div>
  <div class="grid md:grid-cols-2 grid-cols-1 gap-20">
    <?php
    if ($section_7["cards"]):
      foreach ($section_7["cards"] as $card):
        ?>
        <figure class="[&_img]:w-full [&_img]:h-326 [&_img]:object-cover">
          <?= wp_get_attachment_image($card['image'], 'full') ?>
          <figcaption class="p-40 md:h-300 bg-plomo3 mt-15">
            <h3 class="text-naranja mb-2rem"><?= $card["title"] ?></h3>
            <p class="md:!text-16 !text-13 !text-black"><?= $card["text"] ?></p>
          </figcaption>
        </figure>
        <?php
      endforeach;
    endif;
    ?>
  </div>
</section>
<!-- ------------------ SECTION 8 ----------------- -->
<section class="my-108 py-50 bg-rojo">
  <div class="md:w-590 w-full mx-auto">
    <h2 class="text-center leading-180%"><?= $section_8["title"] ?></h2>
    <p class="text-center md:text-16 text-13"><?= $section_8["text"] ?></p>
    <div id="carousel2" class="splide w-full md:px-0 px-50">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          if ($section_8["logos"]):
            foreach ($section_8["logos"] as $logo):
              ?>
              <li class="splide__slide [&_img]:w-180 [&_img]:h-200 [&_img]:object-contain">
                <?= wp_get_attachment_image($logo['image'], 'full') ?>
              </li>
              <?php
            endforeach;
          endif;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ SECTION 9 ----------------- -->
<section id="contacto" class="md:container px-60 ">
  <div class="w-full flex md:flex-row flex-col gap-83">
    <div class="md:w-50% w-full">
      <h2><?= $section_9["title_contact"] ?></h2>
      <div class="flex justify-start items-center gap-12 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_9["phrase_contact"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <p><b>Llámanos:</b><a href="tel:<?= $section_9["phone"] ?>" class="decoration-none"><?= $section_9["phone"] ?></a>
      </p>
      <p><b>Escríbenos:</b><a href="<?= $section_9["email"] ?>" class="decoration-none"><?= $section_9["email"] ?></a>
      </p>
      <p><b>Ó déjanos tus datos y te contáctamos:</b></p>
      <div class="grid grid-cols-2 gap-10 mt-29">
        <input type="text" placeholder="Nombre*" class="!border-amarillo !rounded-8 !bg-transparent" required>
        <input type="text" placeholder="Compañia*" class="!border-amarillo !rounded-8 !bg-transparent" required>
        <input type="tel" placeholder="Telefono*" class="!border-amarillo !rounded-8 !bg-transparent" required>
        <input type="email" placeholder="Correo electronico*" class="!border-amarillo !rounded-8 !bg-transparent"
          required>
        <textarea name="" id="" cols="30" rows="5" placeholder="Mensaje"
          class="col-span-2 pl-15 pt-10 !border-amarillo !rounded-8 !bg-transparent"></textarea>
        <button class="w-121 h-43 rounded-8 bg-naranja/40 hover:bg-naranja text-white font-bold text-16">ENVIAR</button>
      </div>
    </div>
    <div class="md:w-50% w-full">
      <h2><?= $section_9["title_conoce"] ?></h2>
      <div class="flex justify-start items-center gap-12 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_9["phrase_conoce"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <div class="md:[&_img]:w-400 md:[&_img]:h-400 [&_img]:w-full [&_img]:h-auto [&_img]:object-cover">
        <?= wp_get_attachment_image($section_9['image'], 'full') ?>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ SECTION 10 ----------------- -->
<section class="w-full mt-90 flex md:flex-row flex-col justify-between gap-18">
  <div class="md:!w-20% w-full [&_img]:w-full [&_img]:h-217 [&_img]:object-cover">
    <?= wp_get_attachment_image($section_10['imagen_1'], 'full') ?>
  </div>
  <div class="md:!w-30% w-full [&_img]:w-full [&_img]:h-217 [&_img]:object-cover">
    <?= wp_get_attachment_image($section_10['imagen_2'], 'full') ?>
  </div>

  <div class="pt-47 px-54 bg-blue md:!w-50% w-full h-217 flex justify-between forma-parte">
    <div class="flex flex-col">
      <span class="font-covered md:text-20 text-16 text-amarillo"><?= $section_10["phrase"] ?></span>
      <p class="font-bond text-22 text-white"><?= $section_10["title"] ?></p>
      <a href="tel:<?= $section_10["phone"] ?>"
        class="decoration-none mt-26 md:text-16 text-13 font-600 text-white hover:text-naranja">
        <?= $section_10["phone"] ?></a>
      <a href="mailto:<?= $section_10["email"] ?>"
        class="decoration-none md:text-16 text-13 font-600 text-white hover:text-naranja">
        <?= $section_10["email"] ?></a>
    </div>
  </div>
</section>
<!-- ----------------------------------------- -->
<!-- ------------------ BTN WHATSAPP ----------------- -->
<?php if ($whatsapp["whatsapp"] && $whatsapp["boton_whatsapp"]): ?>
  <a href="<?= $whatsapp["whatsapp"] ?>" class="btn-wsp fixed bottom-0 right-0 ">
    <div style="background-image: url('<?= $whatsapp["boton_whatsapp"] ?>');"
      class="h-80 w-80 rounded-5 bg-cover bg-norepeat">
    </div>
  </a>
<?php endif; ?>
<!-- ---------------------------------------------------- -->
<?php
get_footer();
