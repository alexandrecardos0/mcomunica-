<?php
// Footer.php - conteúdo do rodapé da página
?>

<footer class="bg-white text-base py-10 px-5">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-xl">    
            <div>
                <h3 class="text-pink-400 font-bold mb-4">Menu</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-blue-400 hover:text-blue-600">Sobre</a></li>
                    <li><a href="#" class="text-blue-400 hover:text-blue-600">Branding</a></li>
                    <li><a href="#" class="text-blue-400 hover:text-blue-600">Mídias Sociais</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-pink-400 font-bold mb-4">Contato</h3>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2 text-blue-400 hover:text-blue-600">
                        <i class="ri-whatsapp-fill"></i>
                        <a href="https://wa.me/5547992291139" target="_blank">(47) 99229-1139</a>
                    </li>
                    <li class="flex items-center space-x-2 text-blue-400 hover:text-blue-600">
                        <i class="ri-mail-fill"></i>
                        <a href="mailto:contato@mcomunica.com.br" class="text-blue-400 hover:text-blue-600">contato@mcomunica.com.br</a> 
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-pink-400 font-bold mb-4">Social</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-400 hover:text-blue-600 text-4xl">
                       <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="#" class="text-blue-400 hover:text-blue-600 text-4xl">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>
                    <a href="#" class="text-blue-400 hover:text-blue-600 text-4xl">
                        <i class="ri-instagram-fill"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-10 pt-6 border-t border-gray-200 text-center text-xs text-blue-400">
            &copy; Copyright Desenvolvido por H2K
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.mySwiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});
</script>

<!-- Accordion.js JS -->
<script src="https://unpkg.com/accordion-js@4.1.0/dist/accordion.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new Accordion('#accordionExample');
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".swiper_galeria", {
      slidesPerView: 4,
      spaceBetween: 16,
      grabCursor: true,
      mousewheel: true,
      freeMode: true,
      breakpoints: {
        0: { slidesPerView: 1.5 },
        640: { slidesPerView: 2.5 },
        1024: { slidesPerView: 4 }
      }
    });
  });
</script>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const drawer = document.getElementById('drawer');
  const closeBtn = document.getElementById('close-btn');
  const overlay = document.getElementById('overlay');

  menuBtn.addEventListener('click', () => {
    drawer.classList.remove('-translate-x-full');
    overlay.classList.remove('hidden');
  });

  closeBtn.addEventListener('click', () => {
    drawer.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  });

  overlay.addEventListener('click', () => {
    drawer.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  });
</script>

<?php wp_footer(); ?>
</body>
</html>

