<?php 
include('connexio_woo.php');

$id_Producte = $_POST['id'];
$nom_producte = $_POST['name'];
$descripcio = $_POST['short_description'];

$data = [
    'name' => $nom_producte,
    'short_description' => $descripcio,
];

 $woocommerce->delete('products/794', ['force' => true]);

header("refresh:0; url=index.php");
exit();
?>