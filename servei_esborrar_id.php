<?php
include('connexio_woo.php');

$id_Producte = $_POST['id'];

$woocommerce->delete('products/' . $id_Producte);



header("refresh:2; url=index.php");
exit();

?>