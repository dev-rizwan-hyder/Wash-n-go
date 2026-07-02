<?php
/**
 * Wash N Go theme functions.
 */

function washngo_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 92,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wash-n-go'),
    ));
}
add_action('after_setup_theme', 'washngo_theme_setup');

function washngo_asset_version($relative_path)
{
    $path = get_template_directory() . $relative_path;

    return file_exists($path) ? (string) filemtime($path) : wp_get_theme()->get('Version');
}

function washngo_path_is_active($path)
{
    if ('/' === $path) {
        return is_front_page() || is_home();
    }

    $request_path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
    $target_path = trim((string) parse_url(home_url($path), PHP_URL_PATH), '/');

    if ('' === $target_path) {
        return false;
    }

    return $request_path === $target_path || 0 === strpos($request_path, $target_path . '/');
}

function washngo_nav_class($base_class, $path)
{
    return esc_attr($base_class . (washngo_path_is_active($path) ? ' is-active' : ''));
}

function washngo_enqueue_assets()
{
    wp_enqueue_script('washngo-tailwind-config', get_template_directory_uri() . '/assets/js/tailwind-config.js', array(), washngo_asset_version('/assets/js/tailwind-config.js'), false);
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array('washngo-tailwind-config'), null, false);

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    wp_enqueue_style('washngo-style', get_stylesheet_uri(), array(), washngo_asset_version('/style.css'));
    wp_enqueue_style('washngo-main', get_template_directory_uri() . '/assets/css/main.css', array('washngo-style'), washngo_asset_version('/assets/css/main.css'));
    wp_enqueue_style('washngo-header', get_template_directory_uri() . '/assets/css/header.css', array('washngo-main'), washngo_asset_version('/assets/css/header.css'));
    wp_enqueue_style('washngo-footer', get_template_directory_uri() . '/assets/css/footer.css', array('washngo-main'), washngo_asset_version('/assets/css/footer.css'));
    wp_enqueue_style('washngo-pages', get_template_directory_uri() . '/assets/css/pages.css', array('washngo-header', 'washngo-footer'), washngo_asset_version('/assets/css/pages.css'));

    wp_enqueue_script('washngo-main', get_template_directory_uri() . '/assets/js/main.js', array(), washngo_asset_version('/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'washngo_enqueue_assets');

require_once get_template_directory() . '/inc/custom-pages.php';

/**
 * Add floating WhatsApp button to all pages.
 */
function washngo_whatsapp_button()
{
    ?>
    <a href="https://wa.me/923001234567?text=Hello%20Wash%20N%20Go" target="_blank" rel="noopener noreferrer" class="whatsapp-floating-btn" title="<?php esc_attr_e('Chat with us on WhatsApp', 'wash-n-go'); ?>" aria-label="<?php esc_attr_e('Chat with us on WhatsApp', 'wash-n-go'); ?>">
        <span class="whatsapp-tooltip"><?php esc_html_e('Message us', 'wash-n-go'); ?></span>
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
    <?php
}
add_action('wp_footer', 'washngo_whatsapp_button');
