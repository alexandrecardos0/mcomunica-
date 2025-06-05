<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        .grecaptcha-badge {
            visibility: hidden;
            display: none !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-white">
        <div class="container">
            <nav class="flex justify-between items-center">
                <div>
                    <img src="<?= h2k_image_url('logo.png') ?>" alt="" class="w-64">
                </div>
                <ul class="menu-desktop">
                    <li>
                        <a href="#" class="">home</a>
                    </li> 
                    <li>
                        <a href="#">sobre</a>
                    </li> 
                    <li>
                        <a href="#">branding</a>
                    </li> 
                    <li>
                        <a href="#">home</a>
                    </li> 
                    <li>
                        <a href="#">home</a>
                    </li> 
                    <li>
                        <a href="#">contato</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>