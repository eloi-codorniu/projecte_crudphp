<?php
/* 
a2enmod rewrite
service apache2 restart

permalinks /index.php/%postname%/

(http://localhost/wordpress/index.php/wp-json/wc/v3/)
(http://localhost/wordpress/index.php/wp-json/wc/v2/)

cd /var/www/html/php8
apt install composer
composer require automattic/woocommerce

*/

require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;

//###Claus PC X
$url_wordpress="http://192.168.56.11/wordpress";
$url_wordpress_rest=$url_wordpress.'/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
    'ck_d165f7d66777c0ad032a1060d9d60700e1684248',
    'cs_62977f26b1845ddfe1c9f444b829d5df09a2552f',
    [
        'wp_api' => true,
        'query_string_auth' => true,
        'timeout' => 400
    ]
);      
//print_r($woocommerce->get('products'));


//tes
?> 
