<?php 
include('connexio_woo.php'); 

// Obtener el número total de productos
$total_products = count($woocommerce->get('products'));

// Obtener las categorías
$categories = $woocommerce->get('products/categories');

// Inicializar contadores
$num_processors = 0;
$num_rams = 0;
$num_graphics_cards = 0;

// Recorrer las categorías
foreach ($categories as $category) {
    // Obtener los productos asociados a la categoría actual
    $category_products = $woocommerce->get('products', ['category' => $category->id]);

    // Contar la cantidad de productos en la categoría actual
    $num_products_in_category = count($category_products);

    // Incrementar el contador correspondiente según la categoría
    switch ($category->name) {
        case 'Processadors':
            $num_processors += $num_products_in_category;
            break;
        case 'Ram':
            $num_rams += $num_products_in_category;
            break;
        case 'Gràfiques':
            $num_graphics_cards += $num_products_in_category;
            break;
        default:
            break;
    }
}
?>

<!-- Aquí continúa tu HTML con los resultados de los conteos -->

<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
    <div class="count-box">
        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
        <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_processors; ?>" data-purecounter-duration="1" class="purecounter"></span>
        <p>Processadors</p>
    </div>
</div>

<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
    <div class="count-box">
        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
        <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_rams; ?>" data-purecounter-duration="1" class="purecounter"></span>
        <p>RAM's</p>
    </div>
</div>

<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
    <div class="count-box">
        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
        <span data-purecounter-start="0" data-purecounter-end="<?php echo $num_graphics_cards; ?>" data-purecounter-duration="1" class="purecounter"></span>
        <p>Tarjetes gràfiques</p>
    </div>
</div>
