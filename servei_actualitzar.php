<?php include('header.php'); ?>

<style>

    
    .product-container {
        display: flex;
        align-items: center;
        margin-top: 5%;
        margin-left: 1%;
        margin-bottom: 20px;
        width: 100%;
    }

    .product-container img {
        width: 80px;
        margin-right: 20px;
        
    }

    .product-container input {
        flex: 1;
        margin-right: 10px;
        float: right;
    }

    .product-container button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        
    }

    .product-container button:hover {
        background-color: #0056b3;
        
    }

    form{
        width: 30%;
        float: right;
    }
</style>

<?php
include('connexio_woo.php');

foreach ($woocommerce->get('products') as $producte) {
    $id_Producte = $producte->id;
    $src_image = $producte->images[0]->src;
    $nom_producte = $producte->name;
    $descripcio = $producte->short_description;
   
    echo '<div class="product-container">';
    echo '<form method="post">';
    echo '<img src="' . $src_image . '" alt="' . $nom_producte . '">';
    echo '<input class="form-control" name="id" value="' . $id_Producte . '" readonly type="text">';
    echo '<input class="form-control" name="name" value="' . $nom_producte . '" type="text">';
    echo '<input class="form-control" name="short_description" value="' . strip_tags($descripcio) . '" type="text">';
    echo '<button type="submit" name="submit" formaction="servei_actualitzar_id.php"><i class="bi bi-arrow-clockwise"></i> Actualizar</button>';
    echo '</form>';
    echo '</div>';
}
?>

<?php include('footer.php'); ?>
