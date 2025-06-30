<?php

/**
 * Print_r
 */
function pre($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function slug($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

/**
 * Apenas Número
 */
function h2k_number_only($num)
{
    return preg_replace("/[^0-9]+/", "", $num);
}

/**
 * Gerar Link WhatsApp
 */
function h2k_whatsapp_link($num, $frase = false)
{
    $link = "https://wa.me/55";

    $link .= preg_replace("/[^0-9]+/", "", $num);

    if (!empty($frase)) {
        $link .= '?text=' . rawurlencode($frase);
    }

    return $link;
}

/**
 * Remove jQuery Migrate
 */
add_action('wp_default_scripts', function ($scripts) {
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];

        if ($script->deps) {
            $script->deps = array_diff($script->deps, array('jquery-migrate'));
        }
    }
});

/* =Disabling emoji library from Wordpress.
-------------------------------------------------------------- */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else return array();
}

function remove_emojis_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
        $urls = array_diff($urls, array($emoji_svg_url));
    }
    return $urls;
}

function disable_emojis_all()
{
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'adjacent_posts_rel_link');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

    // We also take care of Tiny MCE.
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'remove_emojis_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis_all');

/* =Remove Comments
-------------------------------------------------------------- */
function remove_comments_admin()
{
    global $pagenow;

    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'remove_comments_admin');

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

/* =Remove Wordpress Version
-------------------------------------------------------------- */
remove_action('wp_head', 'wp_generator');

/* =Disable XML-RPC
-------------------------------------------------------------- */
add_filter('xmlrpc_enabled', '__return_false');


/* =Disable AUTHOR
-------------------------------------------------------------- */
add_action('template_redirect', 'disable_author_pages');
function disable_author_pages()
{
    global $wp_query;
    if (is_author() || is_tag()) {
        wp_redirect(get_option('home'), 301);
        exit;
    }
}


/* =Upload SVG
-------------------------------------------------------------- */
add_filter('upload_mimes', 'h2k_cc_mime_types');
function h2k_cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

/* =Fix Files Upload
-------------------------------------------------------------- */
function h2k_sanitize_file_name($filename)
{

    $sanitized_filename = remove_accents($filename); // Convert to ASCII

    // Standard replacements
    $invalid = array(
        ' ' => '-',
        '%20' => '-',
        '_' => '-',
    );
    $sanitized_filename = str_replace(array_keys($invalid), array_values($invalid), $sanitized_filename);

    $sanitized_filename = preg_replace('/[^A-Za-z0-9-\. ]/', '', $sanitized_filename); // Remove all non-alphanumeric except .
    $sanitized_filename = preg_replace('/\.(?=.*\.)/', '', $sanitized_filename); // Remove all but last .
    $sanitized_filename = preg_replace('/-+/', '-', $sanitized_filename); // Replace any more than one - in a row
    $sanitized_filename = str_replace('-.', '.', $sanitized_filename); // Remove last - if at the end
    $sanitized_filename = strtolower($sanitized_filename); // Lowercase

    return $sanitized_filename;
}
add_filter('sanitize_file_name', 'h2k_sanitize_file_name', 10, 1);



//Add alt images automatic
function h2k_add_image_meta_data_alt($attachment_ID)
{

    $filename   =   $_REQUEST['name']; // or get_post by ID
    $withoutExt =   preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $withoutExt =   str_replace(array('-', '_'), ' ', $withoutExt);

    /*
		'post_excerpt' => $withoutExt,  // caption
		'post_content' => $withoutExt,  // description
	*/
    $post_attachment_update = array(
        'ID'           => $attachment_ID,
        'post_content' => $withoutExt,
    );

    wp_update_post($post_attachment_update);

    // update alt text for post
    update_post_meta($attachment_ID, '_wp_attachment_image_alt', $withoutExt);
}
//add_action('add_attachment', 'h2k_add_image_meta_data_alt');


/* =Embed Responsive
-------------------------------------------------------------- */
function h2k_embed_params($oembediframe)
{
    $iframe = $oembediframe;
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];
    $params = array(
        'rel' => 0,
        'controls' => 0,
        'showinfo' => 0,
        'start' => 0
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);
    $attributes = 'frameborder="0" allowfullscreen';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
    return $iframe;
}

function h2k_embed_responsive($html)
{
    return '<div class="box-ratio"><div class="ratio ratio-16x9">' . h2k_embed_params($html) . '</div></div>';
}

add_filter('embed_oembed_html', 'h2k_embed_responsive', 10, 3);
add_filter('video_embed_html', 'h2k_embed_responsive');

/* =Pagination Bootstrap
-------------------------------------------------------------- */
function h2k_limit_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'h2k_limit_excerpt_length');

function h2k_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'h2k_excerpt_more');


/* =Pagination Bootstrap
-------------------------------------------------------------- */
function wp_bootstrap_pagination()
{
    global $wp_query, $paged;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links(array(
        'base'         => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'     => '?paged=%#%',
        'current'     => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'type'         => 'array',
        'prev_next' => true,
        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 24 24" width="1.2rem" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>',
        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" height="1.2rem" viewBox="0 0 24 24" width="1.2rem" fill="currentColor"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8-8-8z"/></svg>',
    ));
    if (is_array($pages)) {
        $paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
        $pagination = '<ul class="pagination justify-content-center">';
        foreach ($pages as $page) {
            $pagination .= "<li class='page-item'>$page</li>";
        }
        $pagination .= '</ul>';
        return $pagination;
    }
}



/* =Plugin -> Yoast Seo
-------------------------------------------------------------- */
add_filter('wpseo_metabox_prio', 'h2k_yoast_to_bottom');
function h2k_yoast_to_bottom($html)
{
    return 'low';
}

add_filter('aioseop_post_metabox_priority', 'h2k_aioseop_to_bottom');
function h2k_aioseop_to_bottom($html)
{
    return 'low';
}

/* =Plugin -> CONTACT FORM 7
-------------------------------------------------------------- */
add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', '<label class="custom-control custom-\1"><input type="\1" name="\2" value="\3" class="custom-control-input"><span class="wpcf7-list-item-label custom-control-label">', $content);
    return $content;
});

/* =CUSTOM LOGIN
-------------------------------------------------------------- */
function h2k_login_logo()
{
    $themeurl = get_stylesheet_directory_uri();

    echo <<<HTML
		<style>
			#login h1 a, .login h1 a {
				background-image: url("$themeurl/assets/images/logo-login.svg");
				width: auto;
				height: 70px;
				background-size: contain;
				background-repeat: no-repeat;
				padding-bottom: 0;
			}
			body.login > #login > #loginform {
				border-radius: 6px;
				box-shadow: 0 10px 10px rgb(0 0 0 / 10%);
			}
			body.login > #login > #loginform .button-primary {
				background-color: #004563;
				border: 0;
				box-shadow: none;
				text-shadow: none;
				padding: 0 24px;
				text-transform: uppercase;
				transition: all ease-in-out 300ms;				
			}
			body.login > #login > #loginform .button-primary:hover{
				background-color: #0090c8;
			}
			body.login > #login > #loginform .input, body.login > #login > #loginform input[type=checkbox]{
				border-color: #dddddd;
			}
		</style>
	HTML;
}
add_action('login_enqueue_scripts', 'h2k_login_logo');

function h2k_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'h2k_login_logo_url');

function h2k_login_logo_url_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'h2k_login_logo_url_title');

/**
 * Remove Customize menus from the Toolbar.
 *
 * @param WP_Admin_Bar $wp_admin_bar WP_Admin_Bar instance.
 */
function h2k_remove_customize($wp_admin_bar)
{
    // Remove customize, background and header from the menu bar.   
    $wp_admin_bar->remove_node('customize');
    $wp_admin_bar->remove_node('customize-background');
    $wp_admin_bar->remove_node('customize-header');
}
add_action('admin_bar_menu', 'h2k_remove_customize', 999);

/**
 * Remove WP logo and comments from the Toolbar.
 *
 * @param WP_Admin_Bar $wp_admin_bar WP_Admin Bar instance.
 */
function h2k_remove_logo_comments($wp_admin_bar)
{
    // Remove wp-logo and comments from the menu bar.
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_node('comments');
}
add_action('admin_bar_menu', 'h2k_remove_logo_comments', 999);

function h2k_remove_footer_text($wp_admin_bar)
{
    echo '&copy; ' . date('Y') . ' - <a href="https://h2k.com.br/" target="_blank">H2K Web & Hosting</a>';
}
add_filter('admin_footer_text', 'h2k_remove_footer_text', 999);



/* =Global Functions
-------------------------------------------------------------- */
function h2k_numero($get_numero)
{
    return trim(preg_replace('#[^0-9]#', '', $get_numero));
}

// convert float
function h2k_moeda($get_valor)
{
    $source = array('.', ',');
    $replace = array('', '.');
    $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
    return $valor; //retorna o valor formatado para gravar no banco
}

// limit text
function h2k_limit($get_texto, $get_limite)
{
    $texto = substr($get_texto, 0, strrpos(substr($get_texto, 0, $get_limite), ' '));
    return $texto;
}

// URL Images
function h2k_image_url($imagem)
{
    $url = get_template_directory_uri() . '/assets/img/' . $imagem;

    return $url;
}

// Telefone Link
function h2k_telefone(string $numero, int $whatsapp = 0)
{
    if ($whatsapp) {
        $phone      = h2k_numero(str_replace('+55', '', $numero));
        $iphone     = strpos($_SERVER['HTTP_USER_AGENT'], "iPhone");
        $android    = strpos($_SERVER['HTTP_USER_AGENT'], "Android");
        $palmpre    = strpos($_SERVER['HTTP_USER_AGENT'], "webOS");
        $berry      = strpos($_SERVER['HTTP_USER_AGENT'], "BlackBerry");
        $ipod       = strpos($_SERVER['HTTP_USER_AGENT'], "iPod");

        if ($iphone || $android || $palmpre || $ipod || $berry == true) {
            $link     = 'whatsapp://send?phone=55' . $phone . '&text=Olá%21%20Quero%20mais%20informações%20sobre:%20' . get_permalink();
        } else {
            $link     = 'https://web.whatsapp.com/send?phone=55' . $phone . '&text=Olá%21%20Quero%20mais%20informações%20sobre:%20' . get_permalink();
        }
    } else {
        $phone      = h2k_numero(str_replace('+55', '', $numero));
        $link         = 'tel:+55' . $phone;
    }
    return $link;
}

// Estimativa de tempo de leitura
function h2k_estimativa_tempo()
{
    global $post;
    // load the content
    $thecontent = $post->post_content;
    // count the number of words
    $words = str_word_count(strip_tags($thecontent));
    // rounding off and deviding per 200 words per minute
    $m = floor($words / 200);
    // rounding off to get the seconds
    $s = floor($words % 200 / (200 / 60));
    // calculate the amount of time needed to read
    //$estimate = $m . ' minuto' . ( $m == 1 ? '' : 's' ) . ', ' . $s . ' segundo' . ( $s == 1 ? '' : 's' );
    if ($m >= 1) {
        $estimate = $m . ' minuto' . ($m == 1 ? '' : 's');
    } else {
        $estimate = $s . ' segundo' . ($m == 1 ? '' : 's');
    }

    // create output
    $output = $estimate . ' de leitura';
    // return the estimate
    return $output;
}

/**
 * Custom Title Last Word
 */
function eccomerce_custom_title($title)
{
    $title_explode = explode(' ', $title);

    if (count($title_explode) > 1) {
        $title = '<span>' . implode(' ', array_slice($title_explode, 0, -1)) . '</span> <span class="last">' . implode(' ', array_slice($title_explode, -1)) . '</span>';
    }

    return $title;
}

/**
 * Find youtube Link
 * convert it into Embed Code
 */
function getYoutubeEmbedUrl($url)
{
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
    }
    return 'https://www.youtube.com/embed/' . $youtube_id;
}


function h2k_mapa($iframe): string
{
    preg_match('/src="([^"]+)"/', $iframe, $matches);
    $srcAttributeValue = $matches[1];
    return '<iframe src="' . esc_url($srcAttributeValue) . '" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
}