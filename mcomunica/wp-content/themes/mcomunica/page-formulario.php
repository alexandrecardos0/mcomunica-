<?php
// Template Name: Formulário
get_header();
?>
<main>
    <section class="w-full h-96">
        <img src="https://arquitetodebolso.com.br/wp-content/uploads/2024/03/71086_Depois-3-scaled.jpeg.webp"
            alt="Imagem de fundo" class="w-full h-full object-cover" />
    </section>
</main>

<section class="py-20 bg-white max-w-7xl mx-auto px-6 py-16">
    <div class="container mx-auto px-1 max-w-7xl">
        <h2 class="text-primary-500 text-5xl font-bold mb-16 shadow-text">Get In Touch With Us</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="flex flex-col space-y-8 text-lg">
            <!-- Telefone -->
            <div>
                <h3 class="text-pink-400 font-semibold text-3xl mb-1"><i class="ri-phone-fill"></i> Telefone</h3>
                <p class="text-black font-medium">(47) 9999-0000</p>
            </div>

            <!-- E-mail -->
            <div>
                <h3 class="text-pink-400 font-semibold text-3xl mb-1"><i class="ri-mail-fill"></i> E-mail</h3>
                <p class="text-black font-medium">SeuEmail@gmail.com</p>
            </div>

            <!-- Redes Sociais -->
            <div>
                <h3 class="text-pink-400 font-semibold text-3xl mb-1"><i class="ri-global-fill"></i> Redes Sociais</h3>
                <div class="flex space-x-4">
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram"
                        class="text-2xl hover:text-pink-600 transition">
                        <i class="ri-instagram-line"></i>
                    </a>
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook"
                        class="text-2xl hover:text-blue-600 transition">
                        <i class="ri-facebook-line"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" aria-label="Twitter"
                        class="text-2xl hover:text-blue-400 transition">
                        <i class="ri-linkedin-line"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- Lado direito: Formulário -->
        <form class="flex flex-col space-y-6">
            <!-- Nome completo -->
            <p>Nome</p>
            <input type="text" name="nome" placeholder="Nome completo"
                class="border border-gray-400 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-shown:opacity-100 focus:placeholder-shown:opacity-0 transition-opacity"
                onfocus="this.placeholder=''" onblur="this.placeholder='Nome completo'" required />

            <!-- E-mail -->
            <p>E-mail</p>
            <input type="email" name="email" placeholder="e-mail@com.br"
                class="border border-gray-400 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-shown:opacity-100 focus:placeholder-shown:opacity-0 transition-opacity"
                onfocus="this.placeholder=''" onblur="this.placeholder='exemplo@exemplo.com'" required />

            <!-- Mensagem -->
            <p>Mensagem</p>
            <textarea name="mensagem" placeholder="Sua Mensagem" rows="5"
                class="border border-gray-400 rounded px-4 py-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-shown:opacity-100 focus:placeholder-shown:opacity-0 transition-opacity"
                onfocus="this.placeholder=''" onblur="this.placeholder='Mensagem'" required></textarea>

            <button type="submit"
                class="bg-pink-400 text-white rounded-xl px-6 py-3 font-semibold hover:bg-pink-500 transition w-[30%]">
                Enviar
            </button>
        </form>
    </div>
</section>

<section>
    <div class="w-full h-[400px] bg-blue-400 flex items-center">
        <div class="container mx-auto px-1 py-14 max-w-7xl">
            <h2 class="text-white text-5xl font-bold mb-6 shadow-text">Formulário de Briefing</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-white">
                <!-- Coluna esquerda -->
                <div class="text-left">
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quo soluta deserunt similique!
                        Aut repellendus sunt deleniti atque enim, cupiditate assumenda est magnam facilis et cum tempore
                        saepe iste quae!
                    </p>

                    <button type="submit"
                        class="bg-pink-400 text-white rounded-xl px-6 py-3 font-semibold hover:bg-pink-500 transition w-[25%]">
                        Clique aqui
                    </button>
                </div>

                <div class="text-left">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
get_footer();
?>