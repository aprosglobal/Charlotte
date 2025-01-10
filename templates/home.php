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
  <video src="<?= $section_1["video"] ?>" muted autoplay loop
    class="md:w-full md:h-auto w-auto h-100vh md:object-contain object-cover"></video>
  <div class="bg-rojo py-72">
    <div class="md:w-900 w-full md:px-0 px-66 mx-auto">
      <h1 class="text-center font-bold font-frank md:text-35 text-25 leading-104% "><?= $section_1["title"] ?></h1>
      <div class="flex justify-center items-center gap-12 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered text-20 text-amarillo"><?= $section_1["phrase"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <p class="mt-20 md:text-16 text-13 text-center">
        <?= $section_1["text"] ?>
      </p>
    </div>
  </div>
  <div class="relative [&_img]:w-full [&_img]:h-500 [&_img]:object-cover">
    <?= wp_get_attachment_image($section_1['banner'], 'full') ?>
    <div class="md:p-36 p-29 bg-azul md:w-434 w-244 absolute md:top-118 md:right-246 top-86 right-86">
      <p class="text-15 text-white italic">
        <?= $section_1["text_banner"] ?>
      </p>
    </div>
  </div>
</section>
<!-- ------------ SECTION 2 ----------------- -->
<section id="servicios" class="pt-108">
  <div class="container">
    <h2 class="text-center md:px-0 px-66"><?= $section_2["title"] ?></h2>
    <div class="flex justify-center items-center gap-12 md:mt-55 mt-40">
      <div class="w-22 h-1 bg-amarillo"></div>
      <span class="font-covered text-20 text-amarillo"><?= $section_2["phrase"] ?></span>
      <div class="w-22 h-1 bg-amarillo"></div>
    </div>
    <div class="grid md:grid-cols-2 grid-cols-1 gap-20 md:mt-78 mt-50">

      <?php
      if ($section_2["servicios"]):
        foreach ($section_2["servicios"] as $servicio):
          ?>
          <!-- <figure
            class="relative md:w-433 md:h-325 w-full h-auto group [&_img]:w-full [&_img]:h-full [&_img]:object-cover overflow-hidden">
            <?= wp_get_attachment_image($servicio['image'], 'full') ?>
            <figcaption
              class="absolute z-10 md:top-230 top-145 left-0 md:w-433 w-full h-full md:p-40 px-36 py-18 bg-transparent duration-300 group-hover:top-0 group-hover:h-full group-hover:bg-black/50 flex flex-col justify-start group-hover:justify-end transition-all">
              <h3 class="text-naranja mb-2rem"><?= $servicio["title"] ?></h3>
              <p class="md:text-16 text-13 text-white"><?= $servicio["text"] ?>
              </p>
            </figcaption>
          </figure> -->
          <figure class="[&_img]:w-full [&_img]:h-326 [&_img]:object-cover">
            <?= wp_get_attachment_image($servicio['image'], 'full') ?>
            <figcaption class="p-35 md:h-260 bg-plomo3 ">
              <h3 class="text-naranja mb-20"><?= $servicio["title"] ?></h3>
              <p class="md:!text-16 !text-13 !text-black"><?= $servicio["text"] ?></p>
            </figcaption>
          </figure>
          <?php
        endforeach;
      endif; ?>
    </div>
  </div>
  <div class="px-50 mt-90 md:px-313 xl:px-28% ">
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
<section id="nosotros" class="container pt-110">
  <div class="flex md:flex-row flex-col gap-100">
    <div class="md:w-50% w-full">
      <h2 class="md:text-left text-center"><?= $section_3["title"] ?></h2>
      <div class="flex md:justify-start justify-center items-center gap-12 md:my-53 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered text-20 text-amarillo"><?= $section_3["phrase"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <p class="md:text-left text-center md:text-16 text-13">
        <?= $section_3["paragraphs"] ?>
      </p>

    </div>
    <div class="md:w-50% w-full">
      <figure class="h-full flex flex-col gap-30 justify-center [&_img]:h-422 [&_img]:w-full [&_img]:object-cover">
        <?= wp_get_attachment_image($section_3['image'], 'full') ?>
        <figcaption class="bg-azul text-white mt-20 w-full h-auto p-34">
          <p class="text-15 italic text-white">
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
    <div class="md:w-50% w-full grid items-center md:pl-233 pl-68 md:pr-60 pr-18 py-40">
      <div>
        <div class="flex justify-start items-center gap-12 mb-15">
          <div class="w-22 h-1 bg-negro_light"></div>
          <span class="font-covered text-20 text-negro_light"><?= $section_4["mision_phrase"] ?></span>
          <div class="w-22 h-1 bg-negro_light"></div>
        </div>
        <h2 class="MyV relative inline-block text-white"><?= $section_4["mision_title"] ?></h2>
        <p class="md:text-16 text-13 text-white mt-20"><?= $section_4["mision_text"] ?></p>
        <div class="flex justify-start items-center gap-12 my-15">
          <div class="w-22 h-1 bg-negro_light"></div>
          <span class="font-covered text-20 text-negro_light"><?= $section_4["vision_phrase"] ?></span>
          <div class="w-22 h-1 bg-negro_light"></div>
        </div>
        <h2 class="MyV2 relative inline-block text-white"><?= $section_4["vision_title"] ?></h2>
        <p class="md:text-16 text-13 text-white mt-20"><?= $section_4["vision_text"] ?></p>
      </div>
    </div>
    <div class="md:w-50% w-full [&_img]:w-full md:[&_img]:h-550 [&_img]:h-523 [&_img]:object-cover">
      <?= wp_get_attachment_image($section_4['image'], 'full') ?>
    </div>
</section>
<!-- ------------------ SECTION 5 ----------------- -->
<section class="my-166">
  <div class="md:w-1098 flex md:gap-50 gap-35 md:flex-row flex-col-reverse h-fit mx-auto">
    <div
      class="md:w-50% w-full flex  items-center justify-center [&_img]:md:w-full [&_img]:md:h-350 [&_img]:w-full [&_img]:h-auto [&_img]:object-cover">
      <?= wp_get_attachment_image($section_5['image'], 'full') ?>
    </div>
    <div class="md:w-50% w-full flex items-center">
      <div>
        <h2 class="text-center"><?= $section_5["title"] ?></h2>
        <div class="flex justify-center items-center gap-12 md:my-35 my-30">
          <div class="w-22 h-1 bg-amarillo"></div>
          <span class="font-covered text-20 text-amarillo"><?= $section_5["phrase"] ?></span>
          <div class="w-22 h-1 bg-amarillo"></div>
        </div>
        <p class="text-center md:text-16 text-13 md:px-0 px-25"><?= $section_5["text"] ?></p>
      </div>
    </div>
  </div>
</section>
<!-- ------------------ SECTION 6 ----------------- -->
<section class="bg-azul pb-120">
  <div class="w-full overflow-x-hidden">
    <div class="flex justify-center items-center gap-12 mt-60 mb-20">
      <div class="w-22 h-1 bg-amarillo"></div>
      <span class="font-covered text-20 text-amarillo"><?= $section_6["phrase"] ?></span>
      <div class="w-22 h-1 bg-amarillo"></div>
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
                      class="card-linea__item <?= (($idx + 1) % 2 == 1) ? 'impar' : 'par'; ?> [&_img]:flex-shrink-0 [&_img]:w-100 [&_img]:md:w-200 [&_img]:h-100 [&_img]:md:h-200 [&_img]:mx-auto [&_img]:object-cover [&_img]:rounded-full">

                      <?= wp_get_attachment_image($time['image'], 'full') ?>
                      <div>
                        <div
                          class="text-25 text-white md:text-35 leading-25 md:leading-35 font-bold mb-5 md:mb-15 font-secondary">
                          <?= $time["year"] ?>
                        </div>
                        <div class="card-linea__item-text text-12 md:text-14 leading-16 md:leading-19 max-w-202 text-white">
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
<section id="calidad" class="container pt-108">
  <h2 class="text-center font-bold"><?= $section_7["title"] ?></h2>
  <div class="flex justify-center items-center gap-12 md:my-47 my-40">
    <div class="w-22 h-1 bg-amarillo"></div>
    <span class="font-covered text-20 text-amarillo"><?= $section_7["phrase"] ?></span>
    <div class="w-22 h-1 bg-amarillo"></div>
  </div>
  <div class="grid md:grid-cols-2 grid-cols-1 gap-20">
    <?php
    if ($section_7["cards"]):
      foreach ($section_7["cards"] as $card):
        ?>
        <figure class="[&_img]:w-full [&_img]:h-326 [&_img]:object-cover">
          <?= wp_get_attachment_image($card['image'], 'full') ?>
          <figcaption class="p-35 md:h-285 bg-plomo3 ">
            <h3 class="text-naranja mb-20"><?= $card["title"] ?></h3>
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
<section class="mt-108 py-50 bg-rojo">
  <div class="md:w-590 w-full mx-auto">
    <h2 class="text-center leading-104% text-naranja"><?= $section_8["title"] ?></h2>
    <p class="text-center md:text-16 text-13 md:mx-0 mx-15 mt-20"><?= $section_8["text"] ?></p>
    <div id="carousel2" class="splide w-full md:px-0 px-50 mt-20">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          if ($section_8["logos"]):
            foreach ($section_8["logos"] as $logo):
              ?>
              <li class="splide__slide [&_img]:w-180 [&_img]:h-auto [&_img]:object-contain">
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
<section id="contacto" class="md:container px-60 pt-108">
  <div class="w-full flex md:flex-row flex-col gap-83">
    <div class="md:w-50% w-full">
      <h2 class="md:text-left text-center"><?= $section_9["title_contact"] ?></h2>
      <div class="flex justify-start items-center gap-12 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered text-20 text-amarillo"><?= $section_9["phrase_contact"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <p><b>Llámanos:</b><a href="tel:<?= $section_9["phone"] ?>" class="decoration-none"><?= $section_9["phone"] ?></a>
      </p>
      <p><b>Escríbenos:</b><a href="<?= $section_9["email"] ?>" class="decoration-none"><?= $section_9["email"] ?></a>
      </p>
      <p><b>Ó déjanos tus datos y te contáctamos:</b></p>
      <?php if ($section_9["contact_form"]): ?>
        <div class="grid grid-cols-2 gap-10 mt-29">
          <div class="relative">
            <input type="text" placeholder="Nombre*" id="nombre-form" minlength="12" maxlength="45"
              class="!border-amarillo !rounded-8 !bg-transparent w-full"
              oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '') ;" required>
            <span class="font-400 text-12 leading-126% text-red vali-ipt-nombre absolute right-50 top-30 hidden ">Ingrese
              su nombre</span>
          </div>
          <div class="relative">
            <input type="text" placeholder="Compañia*" id="compania-form" minlength="12" maxlength="45"
              class="!border-amarillo !rounded-8 !bg-transparent w-full"
              oninput="this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '') ;" required>
            <span
              class="font-400 text-12 leading-126% text-red vali-ipt-compania absolute right-50 top-30 hidden ">Ingrese
              el nombre de la compañia</span>
          </div>
          <div class="relative">
            <input type="tel" placeholder="Celular*" id="celular-form" minlength="9" maxlength="9"
              class="!border-amarillo !rounded-8 !bg-transparent w-full"
              oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
            <span class="font-400 text-12 leading-126% text-red vali-ipt-celular absolute right-50 top-30 hidden ">Ingrese
              su número celular</span>
          </div>
          <div class="relative">
            <input type="email" placeholder="Correo electronico*" id="correo-form" minlength="12" maxlength="45"
              class="!border-amarillo !rounded-8 !bg-transparent w-full" required>
            <span class="font-400 text-12 leading-126% text-red vali-ipt-correo absolute right-50 top-30 hidden ">Ingrese
              su correo electronico</span>
          </div>
          <textarea name="" id="mensaje-form" cols="30" rows="5" placeholder="Mensaje"
            class="col-span-2 pl-15 pt-10 !border-amarillo !rounded-8 !bg-transparent"></textarea>
          <button id="btnsendform"
            class="w-121 h-43 rounded-8 bg-naranja hover:bg-cafe2 focus:bg-cafe2 text-white font-bold text-16">ENVIAR</button>
        </div>
        <div
          class="w-full h-auto justify-center items-center gap-24 mx-auto mt-20 p-10 hidden thanks-message border-1 border-solid border-black">
        </div>
        <div class="hidden">
          <?= do_shortcode($section_9["contact_form"]) ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="md:w-50% w-full">
      <h2 class="md:text-left text-center"><?= $section_9["title_conoce"] ?></h2>
      <div class="flex justify-start items-center gap-12 my-40">
        <div class="w-22 h-1 bg-amarillo"></div>
        <span class="font-covered text-20 text-amarillo"><?= $section_9["phrase_conoce"] ?></span>
        <div class="w-22 h-1 bg-amarillo"></div>
      </div>
      <div class="md:[&_img]:h-400 [&_img]:w-full [&_img]:h-auto [&_img]:object-cover">
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

  <div class="py-47 px-54 bg-blue md:!w-50% w-full md:h-217 h-auto flex justify-between forma-parte">
    <div class="flex flex-col">
      <span class="font-covered text-20 text-amarillo"><?= $section_10["phrase"] ?></span>
      <p class="font-bond text-25 text-white"><?= $section_10["title"] ?></p>
      <a href="tel:<?= $section_10["phone"] ?>"
        class="decoration-none mt-26 md:text-16 text-20 font-600 text-white hover:text-naranja">
        <?= $section_10["phone"] ?></a>
      <a href="mailto:<?= $section_10["email"] ?>"
        class="decoration-none md:text-16 text-20 font-600 text-white hover:text-naranja">
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
