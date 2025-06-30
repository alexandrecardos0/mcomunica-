<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
        .grecaptcha-badge {
            visibility: hidden;
            display: none !important;
        }
    </style>
    <header class="bg-white py-3 shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Logo -->
            <div>
                <img src="<?= h2k_image_url('logo.png') ?>" alt="" class="w-64">
            </div>

            <!-- Botão do menu hamburguer (mobile) -->
            <button id="menu-btn" class="md:hidden text-3xl text-blue-500">
                &#9776;
            </button>

            <!-- Menu Desktop -->
            <ul class="hidden md:flex gap-6 items-center text-sm">
                <li><a href="#" class="text-blue-400 hover:text-blue-600">HOME</a></li>
                <li><a href="#" class="text-blue-400 hover:text-blue-600">SOBRE</a></li>
                <li><a href="#" class="text-blue-400 hover:text-blue-600">BRANDING</a></li>
                <li><a href="#" class="text-blue-400 hover:text-blue-600">MÍDIAS SOCIAIS</a></li>
                <li>
                    <a href="#contato" class="bg-pink-400 text-white px-4 py-2 rounded-xl hover:bg-pink-600 transition">
                        CONTATO
                    </a>
                </li>
            </ul>

        </div>
    </header>

    <!-- Drawer Mobile -->
    <div id="drawer"
        class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg transform -translate-x-full transition-transform duration-300 z-50 md:hidden">
        <div class="p-6 space-y-6">
            <div class="flex justify-end">
            <button id="close-btn" class="text-2xl mb-4 text-blue-500 ">&times;</button>
            </div>
            <div>
                <img src="<?= h2k_image_url('logo.png') ?>" alt="" class="w-64">
            </div>
            <ul>
                <li class="mb-3"><a href="#" class="text-blue-400 hover:text-blue-600">HOME</a></li>
                <li  class="mb-3"><a href="#" class="text-blue-400 hover:text-blue-600">SOBRE</a></li>
                <li  class="mb-3"><a href="#" class="text-blue-400 hover:text-blue-600">BRANDING</a></li>
                <li  class="mb-3"><a href="#" class="text-blue-400 hover:text-blue-600">MÍDIAS SOCIAIS</a></li>
                <li  class="mb-3">
                    <a href="#contato" class="justify-center flex bg-pink-400 text-white px-4 py-2 rounded-xl hover:bg-pink-600 transition">
                        CONTATO
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden z-40 md:hidden"></div>