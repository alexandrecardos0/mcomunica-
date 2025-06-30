<?php
/*
Template Name: Sobre
*/
get_header(); ?>

<main class="bg-blue-400 min-h-screen">
    <section class="grid grid cols-1 md:grid-cols-2 itens center gap-8 px-6 py-10 max-w-7xl mx-auto">
        <div class="pt-32">
            <h1 class="text-white text-5xl font-extrabold mb-16 shadow-text">Lorem ipsum</h1>
            <p class="text-white text-lg text-left mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa quo soluta deserunt similique! Aut repellendus sunt
                deleniti atque enim, cupiditate assumenda est magnam facilis
                et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae!</p>

            <p></p>

            <p class="text-white text-lg text-left mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa quo soluta deserunt similique! Aut repellendus sunt
                deleniti atque enim, cupiditate assumenda est magnam facilis
                et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae!
            </p>

            <button class="bg-pink-600 text-white px-6 py-2 rounded hover:bg-pink-600 transition">Fale conosco</button>
        </div>

        <div class="pl-10">
            <img src="<?= h2k_image_url('sobre.png') ?>" alt="imagem pessoa"
                style="border-radius:120px 59px 130px 76px; box-shadow: 8px 8px 0 0 #F06292;"
                class="w-[700px] h-[600px] object-cover mt-20">
        </div>
    </section>
</main>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-primary-500 text-5xl font-extrabold mb-16 shadow-text">A marca</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-10">

            <!-- Missão -->
            <div class="text-pink-600 font-bold text-3xl">
                <div class="flex items-center gap-2">
                    <i class="ri-award-line"></i>
                    <h2>Missão</h2>
                </div>
                <p class="text-black text-xl font-normal mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa quo soluta deserunt similique!
                </p>
            </div>

            <!-- Visão -->
            <div class="text-pink-600 font-bold text-3xl">
                <div class="flex items-center gap-2">
                    <i class="ri-eye-line"></i>
                    <h2>Visão</h2>
                </div>
                <p class="text-black text-xl font-normal mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa quo soluta deserunt similique!
                </p>
            </div>

            <!-- Valores -->
            <div class="text-pink-600 font-bold text-3xl">
                <div class="flex items-center gap-2">
                    <i class="ri-shake-hands-line"></i>
                    <h2>Valores</h2>
                </div>
                <p class="text-black text-xl font-normal mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Culpa quo soluta deserunt similique!
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-pink-600">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 items-start gap-10">
            <div class="text-white font-bold text-3xl">
                <p>+10000</p>
                <p>Posts no Instagram</p>
            </div>
            <div class="text-white font-bold text-3xl">
                <p>+600</p>
                <p>Brandings Desenvolvidos</p>
            </div>
            <div class="text-white font-bold text-3xl">
                <p>+20</p>
                <p>Redes sociais gerenciadas</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-400 min-h-[800px]">
    <div class="grid grid-cols-1 md:grid-cols-12 items-center gap-y-8 gap-x-16 gap-8 px-6 py-10 max-w-7xl mx-auto pt-40">

        <div class="mb-10 md:col-span-5">
            <h1 class="text-white text-5xl font-extrabold mb-6 shadow-text">Lorem ipsum</h1>
            <p class="text-white text-lg text-left">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa quo soluta deserunt similique! Aut repellendus sunt
                deleniti atque enim, cupiditate assumenda est magnam facilis
                et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae!
            </p>
            <button class="bg-pink-600 text-white px-6 py-2 rounded hover:bg-pink-600 transition mt-8">Fale
                conosco</button>
        </div>


        <div class="md:col-span-7">
            <div class="swiper swiper_sobre">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://wordpress-cms-gc-prod-assets.quero.space/uploads/2022/03/portrait-of-young-blonde-woman-making-frame-gesture-with-hands-2.jpg"
                            alt="imagem 1" class="rounded-xl w-full h-[280px] object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://blog.portalpos.com.br/wp-content/uploads/2021/11/marketing-pessoal.jpg"
                            alt="Imagem 2" class="rounded-xl w-full h-[280px] object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://agenciagentileza.com.br/wp-content/uploads/2022/10/Conheca-os-fundamentos-do-marketing-1.jpg"
                            alt="Imagem 3" class="rounded-xl w-full h-[280px] object-cover">
                    </div>
                </div>
            </div>
        </div>


        
    </div>


</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center gap-x-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTchxt-HO8YrsGHGMExxwy8X_XITxo0X22H2Q&s"
                class="rounded-full w-20 h-auto" alt="mcomunicaPerfil">
            <p class="text-lg">mcomunica</p>
        </div>
</section>

<section class="py-20 bg-white">
    <div  class="max-w-6xl mx-auto">
    <div class="swiper swiper_galeria">
        <div class="swiper-wrapper">
            <!-- imagem 1 -->
            <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt="" class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 2 -->
            <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 3 -->
            <div class="swiper-slide h-auto flex items-center justify-center" >
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 4 -->
            <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">     
            </div>
            <!-- imagem 5 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 6 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 7 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 8 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 9 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 10 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]"> 
            </div>
            <!-- imagem 11 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
            <!-- imagem 12 -->
             <div class="swiper-slide h-auto flex items-center justify-center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4fTKpDn3stNn5tkfzbESjzFI7yrzRuEyatw&s" alt=""class="w-60 h-60 rounded-[40px]">
            </div>
        </div>
    </div>
    </div>
</section>

<section class="min-h-[700px] py-20 bg-white">
  <div class="grid grid-cols-1 md:grid-cols-2 items-start gap-8 px-6 py-10 max-w-7xl mx-auto">
    <div class="flex justify-center">
      <img 
        src="https://img.freepik.com/fotos-gratis/empresario-a-analisar-dados-do-mercado-de-acoes_23-2151966723.jpg?semt=ais_hybrid&w=740" 
        alt="Imagem"
        class="h-[600px] w-auto object-cover rounded-[20px]">
    </div>
    <div>
      <h2 class="text-blue-400 text-5xl font-extrabold shadow-text mb-6">Dúvidas</h2>
      
      <p class="mb-8 text-gray-800">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Culpa quo soluta deserunt similique! Aut repellendus sunt
        deleniti atque enim, cupiditate assumenda est magnam facilis
        et cum tempore saepe iste quae!
      </p>
      
      <div id="faq-accordion" data-accordion="collapse" class="w-full max-w-2xl">
        <!-- Aba 1 -->
        <h2 id="faq-heading-1" class="border-b">
          <button type="button" 
                  class="flex items-center justify-between w-full p-4 font-medium text-left font-bold" 
                  data-accordion-target="#faq-body-1" 
                  aria-expanded="false" 
                  aria-controls="faq-body-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            <span class="text-2xl font-bold transition-transform duration-300 transform accordion-icon">+</span>
          </button>
        </h2>
        <div id="faq-body-1" class="hidden" aria-labelledby="faq-heading-1">
          <div class="p-4 bg-white text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </div>
        </div>

        <!-- Aba 2 -->
        <h2 id="faq-heading-2" class="border-b">
          <button type="button" 
                  class="flex items-center justify-between w-full p-4 font-medium text-left" 
                  data-accordion-target="#faq-body-2" 
                  aria-expanded="false" 
                  aria-controls="faq-body-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            <span class="text-2xl font-bold transition-transform duration-300 transform accordion-icon">+</span>
          </button>
        </h2>
        <div id="faq-body-2" class="hidden" aria-labelledby="faq-heading-2">
          <div class="p-4 bg-white text-gray-700">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
          </div>
        </div>

        <!-- Aba 3 -->
        <h2 id="faq-heading-3" class="border-b">
          <button type="button" 
                  class="flex items-center justify-between w-full p-4 font-medium text-left" 
                  data-accordion-target="#faq-body-3" 
                  aria-expanded="false" 
                  aria-controls="faq-body-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            <span class="text-2xl font-bold transition-transform duration-300 transform accordion-icon">+</span>
          </button>
        </h2>
        <div id="faq-body-3" class="hidden" aria-labelledby="faq-heading-3">
          <div class="p-4 bg-white text-gray-700">
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.
          </div>
        </div>

        <!-- Aba 4 -->
        <h2 id="faq-heading-4" class="border-b">
          <button type="button" 
                  class="flex items-center justify-between w-full p-4 font-medium text-left" 
                  data-accordion-target="#faq-body-4" 
                  aria-expanded="false" 
                  aria-controls="faq-body-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            <span class="text-2xl font-bold transition-transform duration-300 transform accordion-icon">+</span>
          </button>
        </h2>
        <div id="faq-body-4" class="hidden" aria-labelledby="faq-heading-4">
          <div class="p-4 bg-white text-gray-700">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.querySelectorAll('#faq-accordion button').forEach(button => {
    button.addEventListener('click', () => {
      const expanded = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!expanded));

      // Toggle icon from + to -
      const icon = button.querySelector('.accordion-icon');
      if (!expanded) {
        icon.textContent = '−'; // sinal de menos (–)
      } else {
        icon.textContent = '+';
      }
    });
  });
</script>

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








<?php
get_footer();