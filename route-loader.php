<?php
/**
 * Load WordPress for custom marketing-page fallback directories.
 */

$script_filename = isset($_SERVER['SCRIPT_FILENAME']) ? str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']) : '';
$base_directory  = str_replace('\\', '/', __DIR__);

if ($script_filename && 0 === strpos($script_filename, $base_directory . '/')) {
    $relative_script = trim(substr($script_filename, strlen($base_directory)), '/');
    $route           = trim(dirname($relative_script), './');

    if ($route && !defined('WASHNGO_FALLBACK_ROUTE')) {
        define('WASHNGO_FALLBACK_ROUTE', str_replace('\\', '/', $route));
    }
}

require __DIR__ . '/wp-load.php';

if (defined('WASHNGO_FALLBACK_ROUTE') && function_exists('washngo_custom_page_routes')) {
    $routes = washngo_custom_page_routes();
    $route  = trim((string) WASHNGO_FALLBACK_ROUTE, '/');

    if (isset($routes[$route])) {
        global $washngo_current_custom_page;

        $washngo_current_custom_page = $routes[$route];
        $washngo_current_custom_page['request_path'] = $route;

        status_header(200);
        include get_template_directory() . '/custom-page.php';
        exit;
    }
}

require __DIR__ . '/wp-blog-header.php';
