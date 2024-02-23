<?php include('header.php'); ?>


<?php include('connexio_woo.php'); ?>

<form method="post">
    <label for="nom">Nom producte:</label><br>
    <input type="text" id="nom" name="nom"><br>

    <label for="preu">Preu:</label><br>
    <input type="text" id="preu" name="preu"><br>

    <label for="descripcio">Descripció:</label><br>
    <input type="text" id="descripcio" name="descripcio"><br>
    <br>
    <input type="submit" value="Afegir">

</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $nombre_producto = $_POST['nom'];
    $precio_producto = $_POST['preu'];
    $descripcion_producto = $_POST['descripcio'];


    $data = [
        'name' => $nombre_producto,
        'regular_price' => $precio_producto,
        'description' => $descripcion_producto,
    ];
    $woocommerce->post('products', $data);
}




//print_r($woocommerce->post('products', $data));
?>



<?php include('footer.php'); ?>