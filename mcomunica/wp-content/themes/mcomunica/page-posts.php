<?php
// Template Name: Posts Page
get_header();
?>
<hr class="border-t border-pink-500  my-8">
<main class="bg-white min-h-screen">
    <section class="grid grid cols-1 md:grid-cols-2 itens center gap-8 px-24s py-10 max-w-7xl mx-auto">
        <div class="pt-32">
            <h1 class="text-blue-400 text-5xl font-bold mb-16 shadow-text">Lorem ipsum</h1>
            <p class="text-black text-lg text-left mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa quo soluta deserunt similique! Aut repellendus sunt
                deleniti atque enim, cupiditate assumenda est magnam facilis
                et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae!</p>

            <p></p>

            <p class="text-black text-lg text-left mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Culpa quo soluta deserunt similique! Aut repellendus sunt
                deleniti atque enim, cupiditate assumenda est magnam facilis
                et cum tempore saepe iste quae! Culpa quo soluta deserunt similique!
                Aut repellendus sunt deleniti atque enim, cupiditate assumenda est
                magnam facilis et cum tempore saepe iste quae!
            </p>

        </div>

        <div class="pl-10">
            <img src="https://img.freepik.com/vetores-gratis/modelo-de-quadro-de-instragrama-simples_1199-125.jpg?semt=ais_hybrid&w=740"
                alt="imagem pessoa" style="border-radius:80px 59px 150px 76px; box-shadow: 8px 8px 0 0 #F06292;"
                class="w-[700px] h-[600px] object-cover mt-20">
        </div>
    </section>
</main>


<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-7xl">
    <h2 class="text-primary-500 text-5xl font-bold mb-16 shadow-text">Galeria</h2>

    <div class="grid grid-cols-4 gap-6">
      <!-- Coluna 1 -->
      <div class="flex flex-col gap-6">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 1" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 2" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 3" class="w-80 h-96 rounded-[40px] object-cover">
      </div>

      <!-- Coluna 2 -->
      <div class="flex flex-col gap-6">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 4" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 5" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 6" class="w-80 h-96 rounded-[40px] object-cover">
      </div>

      <!-- Coluna 3 -->
      <div class="flex flex-col gap-6">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 7" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 8" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 9" class="w-80 h-96 rounded-[40px] object-cover">
      </div>

      <!-- Coluna 4 -->
      <div class="flex flex-col gap-6">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 10" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 11" class="w-80 h-96 rounded-[40px] object-cover">
        <img src="https://cdn.awsli.com.br/600x1000/1348/1348723/produto/53459738/casual-nov-8lghog4904.jpg" alt="Imagem 12" class="w-80 h-96 rounded-[40px] object-cover">
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-7xl">
    <div class="flex bg-gray-100 rounded-[40px] overflow-hidden shadow-lg">
      <!-- Imagem esquerda 40% -->
      <div class="w-2/5">
        <img 
          src="https://cdn.corporatefinanceinstitute.com/assets/products-and-services.jpeg" 
          alt="Imagem do Card" 
          class="w-full h-full object-cover rounded-l-[40px]"
        />
      </div>
      
      <!-- Conteúdo direito 60% -->
      <div class="w-3/5 p-8 flex flex-col justify-start">
        <h2 class="text-primary-500 text-4xl font-bold mb-16 shadow-text">Título do Card</h2>
        <p class="text-gray-700 text-lg leading-relaxed mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quo soluta deserunt similique! </p>
        <p class="text-gray-700 text-lg leading-relaxed mb-8">Aut repellendus su deleniti atque enim, cupiditate assumenda est magnam facilis et cum tempore saepe iste quae! </p>       
        <p class="text-gray-700 text-lg leading-relaxed mb-8">Culpa quo soluta deserunt similiqu Aut repellendus sunt deleniti atque enim, cupiditate assumenda est magnam facilis et cum tempore saepe iste quae!</p>
       
         <button class="self-start bg-pink-500 text-white px-6 py-3 rounded-lg hover:bg-pink-400 transition"><i class="ri-instagram-line"></i> Instagram</button>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-1 max-w-7xl">
    <h2 class="text-primary-500 text-5xl font-bold mb-16 shadow-text">Outros Projetos</h2>

    <!-- Swiper -->
    <div class="swiper swiper_galeria">
      <div class="swiper-wrapper">
        
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        <div class="swiper-slide">
          <img src="https://assets.turbologo.com/blog/en/2021/09/10093610/photo-camera-958x575.png" class="rounded-xl w-[280px] h-[280px] object-cover" />
        </div>
        
      </div>
    </div>
  </div>
</section>

<hr class="border-t border-pink-500  my-8">


<?php
get_footer();   
?>