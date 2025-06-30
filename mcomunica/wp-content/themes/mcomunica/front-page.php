<?php
get_header();
?>

<main>

  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  </head>

  <!-- Banner -->
  <section>
    <?= get_template_part('parts/part', 'banner') ?>
  </section>

  <!-- Quem sou eu -->
  <section>
    <div class="container bg-white shadow-xl rounded-2xl relative bottom-32 p-8 mx-auto max-w-7xl z-10">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="p-8">
          <h2 class="text-primary-500 font-extrabold text-5xl mb-5 shadow-text">Quem sou eu</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pretium ut leo eu
            scelerisque. Vestibulum tempus fermentum eros, in interdum orci. Vivamus pharetra urna blandit,
            tincidunt justo sed, efficitur quam. Donec efficitur odio vitae tellus auctor, sed vestibulum
            lorem imperdiet. In ultricies lacus consequat, eleifend libero ut, accumsan dui. In gravida
            consequat felis non posuere. In hac habitasse platea dictumst. Sed ut nulla id nulla ultricies
            varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
            egestas. Nullam dignissim et risus in congue. Curabitur pellentesque libero dui, et porttitor
            dui hendrerit in. Fusce cursus convallis gravida.
          </p>
        </div>
        <div class="p-8">
          <img class="w-full h-[380px] object-cover rounded-xl"
            src="<?= h2k_image_url('sobre.png') ?>" alt="Quem sou eu" />
        </div>
      </div>
    </div>
  </section>

  <!-- Serviços -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-10 max-w-7xl">
      <h2 class="text-primary-500 text-5xl font-extrabold mb-16 shadow-text">Nossos serviços</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="p-8 rounded-lg bg-gray-50 shadow">
          <h3 class="text-pink-500 text-3xl font-bold mb-4">
            <i class="ri-heart-line"></i> Branding
          </h3>
          <p class="text-gray-700 mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare nibh arcu, in rutrum tellus laoreet
            sit amet.
          </p>
          <a href="#" class="inline-block bg-pink-400 text-white px-5 py-2 rounded hover:bg-pink-500 transition">Saiba
            mais</a>
        </div>

        <div class="p-8 rounded-lg bg-gray-50 shadow">
          <h3 class="text-pink-500 text-3xl font-bold mb-4">
            <i class="ri-heart-line"></i> Mídias Sociais
          </h3>
          <p class="text-gray-700 mb-6">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare nibh arcu, in rutrum tellus laoreet
            sit amet.
          </p>
          <a href="#" class="inline-block bg-pink-400 text-white px-5 py-2 rounded hover:bg-pink-500 transition">Saiba
            mais</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Parceiros -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-10 max-w-7xl">
      <h2 class="text-primary-500 text-5xl font-extrabold mb-16 shadow-text">Nossos parceiros</h2>
      <div class="swiper swiper_parceiros">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img
              src="<?= h2k_image_url('marca1.png') ?>" alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img src="<?= h2k_image_url('marca2.png')?>" alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img src="<?= h2k_image_url('marca3.png')?>"alt="Logo da empresa"class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img
              src="<?= h2k_image_url('marca4.png')?>"alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img
              src="<?= h2k_image_url('marca1.png') ?>"alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img src="<?= h2k_image_url('marca2.png')?>" alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img src="<?= h2k_image_url('marca3.png')?>"alt="Logo da empresa" class="h-40 object-contain" />
          </div>
          <div class="swiper-slide">
            <img
              src="<?= h2k_image_url('marca4.png')?>"alt="Logo da empresa" class="h-40 object-contain" />
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Depoimentos -->
  <section class="relative h-[600px] overflow-hidden">
    <!-- Imagem de fundo -->
    <img src="<?= h2k_image_url('depoimentos.png') ?>"
      alt="Pessoas sorrindo" class="absolute inset-0 w-full h-full object-cover z-0" />


    <!-- Degradê azul sobre a imagem -->
    <div class="absolute inset-0 bg-gradient-to-t from-blue-900/70 to-blue-200/20 z-10"></div>

    <div class="relative z-20 pt-40">
      <div class="max-w-7xl mx-auto text-justify text-2xl">
        <h2 class="text-primary-500 text-5xl font-extrabold mb-16 shadow-text">Depoimentos</h2>

        <div class="swiper swiper_depoimentos">
          <div class="swiper-wrapper py-16">
            <div class="swiper-slide px-5">
              <!-- Card 1 -->
              <div class="relative bg-white rounded-2xl shadow-lg p-6 pt-12 w-full text-gray-800">
                <!-- Avatar -->
                <div class="absolute -top-10 left-5">
                  <img class="w-20 h-20 rounded-full border-4 border-white shadow-md"
                    src="https://randomuser.me/api/portraits/men/32.jpg" alt="Sebastian">
                </div>

                <!-- card 2 -->
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <h3 class="font-bold text-lg">Sebastian</h3>
                    <p class="text-pink-500 text-sm">Graphic design</p>
                  </div>
                  <div class="text-pink-500 text-lg">
                    ★★★★★
                  </div>
                </div>

                <!-- Depoimento -->
                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text.
                </p>
              </div>
            </div>

            <div class="swiper-slide px-5">
              <!-- Card 3 -->
              <div class="relative bg-white rounded-2xl shadow-lg p-6 pt-12 w-full text-gray-800">
                <!-- Avatar -->
                <div class="absolute -top-10 left-5">
                  <img class="w-20 h-20 object-cover rounded-full border-4 border-white shadow-md"
                    src="https://plus.unsplash.com/premium_photo-1689551670902-19b441a6afde?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cmFuZG9tJTIwcGVvcGxlfGVufDB8fDB8fHww"
                    alt="Sebastian">
                </div>

                <!-- card 2 -->
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <h3 class="font-bold text-lg">Lavine</h3>
                    <p class="text-pink-500 text-sm">Engineer</p>
                  </div>
                  <div class="text-pink-500 text-lg">
                    ★★★★★
                  </div>
                </div>

                <!-- Depoimento -->
                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text.
                </p>
              </div>
            </div>

            <div class="swiper-slide px-5">
              <!-- Card 3 -->
              <div class="relative bg-white rounded-2xl shadow-lg p-6 pt-12 w-full text-gray-800">
                <!-- Avatar -->
                <div class="absolute -top-10 left-5">
                  <img class="w-20 h-20 object-cover rounded-full border-4 border-white shadow-md"
                    src="https://static.vecteezy.com/ti/fotos-gratis/t1/5346410-close-up-retrato-de-sorrindo-bonito-jovem-caucasiano-cara-olhando-para-camera-em-fundo-de-estudio-cinza-claro-isolado-foto.jpg"
                    alt="Sebastian">
                </div>

                <!-- Nome e estrelas -->
                <div class="flex justify-between items-center mt-2">
                  <div>
                    <h3 class="font-bold text-lg">Joseph</h3>
                    <p class="text-pink-500 text-sm">Design</p>
                  </div>
                  <div class="text-pink-500 text-lg">
                    ★★★★★
                  </div>
                </div>

                <!-- Depoimento -->
                <p class="text-gray-600 text-sm mt-4 leading-relaxed">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text.
                </p>
                
              </div>
            </div>
          </div>

        </div>
      </div>
  </section>
</main>

<?php
get_footer();
?>