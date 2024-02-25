<?php include('header.php'); ?>

<style>
    /* Estilos para el formulario de productos */
    form {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: #f9f9f9;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        margin-top:5%;
    }

    form input,
    form button {
        margin: 5px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form input[type="text"] {
        flex: 1;
    }

    form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    form button:hover {
        background-color: #0056b3;
    }

    form img {
        width: 80px;
        margin-right: 20px;
    }
</style>

<?php
include('connexio_woo.php');

foreach ($woocommerce->get('products') as $producte) {
    $id_Producte = $producte->id;
    $src_image = $producte->images[0]->src;
    $nom_producte = $producte->name;
    $discripcion = $producte->short_description;
   
    echo '<form method="post">';
    echo '<input class="form-control" name="id" value="' . $id_Producte . '"  type="text">';
    echo '<img class="img-responsive" src="' . $src_image . '" alt="' . $nom_producte . '">';
    echo '<input class="form-control" name="name" value="' . $nom_producte . '"  type="text">';
    echo '<input class="form-control" name="short_description" value="' . strip_tags($discripcion) . '"  type="text">';
    echo '<button  type="submit" name="submit" formaction="servei_esborrar_id.php">Esborrar</button>';
    echo '</form>';
}
?>

<?php include('footer.php'); ?>
