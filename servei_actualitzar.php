<?php include('header.php'); ?>
<?php
include('connexio_woo.php');

foreach ($woocommerce->get('products') as $producte) {
    $id_Producte = $producte->id;
    $src_image = $producte->images[0]->src;
    $nom_producte = $producte->name;
    $discripcion = $producte->short_description;
   
    echo '<form method="post">';
    echo '<input class="form-control" name="id" value="' . $id_Producte . '" readonly type="text">';
    echo '<img class="img-responsive" src="' . $src_image . '" style="width:4vw;">';
    echo '<input class="form-control" name="name" value="' . $nom_producte . '" type="text">';
    echo '<input class="form-control" name="short_description" value="' . strip_tags($discripcion) . '" type="text">';
    echo '<button  type="submit" name="submit" formaction="servei_actualitzar_id.php"><i class="bi bi-arrow-clockwise"></i> Actualizar</button>';
    echo '</form><br>';
}
?>
<?php include('footer.php'); ?>



