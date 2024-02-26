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
  
    $nom_producte = $_POST['nom'];
    $preu_producte = $_POST['preu'];
    $descripcio_producte = $_POST['descripcio'];


    $data = [
        'name' => $nom_producte,
        'regular_price' => $preu_producte,
        'description' => $descripcio_producte,
    ];
    $woocommerce->post('products', $data);
}




?>



<?php include('footer.php'); ?>