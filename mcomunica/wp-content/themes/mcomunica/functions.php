<?php

/**
 * Functions Theme
 */
include('inc/functions-theme.php');

/**
 * Custom Styles/Scripts
 */
add_action('wp_enqueue_scripts', function () {
    /** Styles */
    wp_enqueue_style('h2k-app', get_stylesheet_directory_uri() . '/assets/css/app.css', array(), time());
    wp_enqueue_style('h2k-slick', get_stylesheet_directory_uri() . '/assets/lib/slick/slick.min.css');
    wp_enqueue_style('h2k-fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css');
    wp_enqueue_style('h2k-fancy', get_stylesheet_directory_uri() . '/assets/lib/fancybox/fancybox.css');
    wp_enqueue_style('h2k-remix-icon', get_stylesheet_directory_uri() . '/assets/lib/remixicon/fonts/remixicon.css');
    wp_enqueue_style('h2k-swiper', get_stylesheet_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.css');
    
    wp_enqueue_style('h2k-style', get_stylesheet_directory_uri() . '/style.css');

    /** Scripts */
    //wp_deregister_script('jquery');

    // register to footer (the last function argument should be true)
    //wp_register_script('jquery', includes_url('/js/jquery/jquery.min.js'), array(), null, true);

    //wp_enqueue_script('jquery');

    wp_enqueue_script('h2k-mask', get_stylesheet_directory_uri() . '/assets/lib/mask/jquery.mask.min.js', array('jquery'), time(), true);
    wp_enqueue_script('h2k-slick',  get_stylesheet_directory_uri() . '/assets/lib/slick/slick.min.js', array('jquery'), time(), true);
    wp_enqueue_script('h2k-fancy', get_stylesheet_directory_uri() . '/assets/lib/fancybox/fancybox.umd.js', array('jquery'), time(), true);
    wp_enqueue_script('h2k-swiper', get_stylesheet_directory_uri() . '/assets/lib/swiper/swiper-bundle.min.js', array('jquery'), time(), true);
    wp_enqueue_script('h2k-app', get_stylesheet_directory_uri() . '/assets/js/app.js', array('jquery'), time(), true);
});

/**
 * Theme Setup
 */
add_action('after_setup_theme', function () {
    /**
     * remove SVG e estilos globais
     */
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');

    /**
     * remove as ações wp_footer que adicionam estilos inline globais
     */
    remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

    /**
     * remove filtros render_block que adicionam coisas desnecessárias
     */
    remove_filter('render_block', 'wp_render_duotone_support');
    remove_filter('render_block', 'wp_restore_group_inner_container');
    remove_filter('render_block', 'wp_render_layout_support_flag');

    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('title-tag');

    /**
     * HTML5 Support
     */
    add_theme_support(
        'html5',
        array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );

    /**
     * Theme Menus
     */
    register_nav_menus(
        array(
            'main' => __('Principal', 'h2k'),
            'footer' => __('Menu Rodape', 'h2k'),
            'menu_mobile' => __('Menu Mobile', 'h2k'),
        )
    );

    /**
     * Images Custom Sizes
     */
    add_image_size('banner_desktop', 1920, 890, array('center', 'center'));
    add_image_size('banner_mobile', 440, 370, array('center', 'center'));
    add_image_size('imagem_medio', 1080, 720, array('center', 'center'));
    add_image_size('banner_pages_desktop', 1920, 520, array('center', 'center'));
    add_image_size('banner_pages_mobile', 835, 400, array('center', 'center'));
    add_image_size('icone', 100, 100, array('center', 'center'));
});


/**
 * ACF Page Options
 */
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(
        array(
            'page_title' => __('Informações gerais', 'h2k'),
            'menu_title' => __('Informações gerais', 'h2k'),
            'menu_slug' => 'website-informations',
            'capability' => 'edit_posts',
            'redirect' => false,
            'icon_url' => 'dashicons-info'
        )
    );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Barra Lateral - Páginas', 'h2k'),
            'id' => 'sidebar-general',
            'description' => esc_html__('Adicione widgets aqui.', 'h2k'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'theme_widgets_init');

/**
 * Add Favicon
 * @return void
 */
function h2k_add_favicon()
{
?>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
<?php
}

function getYouTubeVideoId($pageVideUrl)
{
    $link = $pageVideUrl;
    $video_id = explode("?v=", $link);
    if (!isset($video_id[1])) {
        $video_id = explode("youtu.be/", $link);
    }
    $youtubeID = $video_id[1];
    if (empty($video_id[1])) $video_id = explode("/v/", $link);
    $video_id = explode("&", $video_id[1]);
    $youtubeVideoID = $video_id[0];
    if ($youtubeVideoID) {
        return $youtubeVideoID;
    } else {
        return false;
    }
}

add_action('wp_head', 'h2k_add_favicon');
add_action('login_head', 'h2k_add_favicon');
add_action('admin_head', 'h2k_add_favicon');
