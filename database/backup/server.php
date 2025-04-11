directory : vendor/laravel/framework/src/Illuminate/Foundation/resources/
copy :
<?php

$publicPath = getcwd();

$url = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

if ($url !== '/' && file_exists($publicPath.$url)) {
    return false;
}

require_once $publicPath.'/index.php';
