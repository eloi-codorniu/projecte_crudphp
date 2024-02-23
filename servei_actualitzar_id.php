<?php include('connexio_woo.php');

      $id_Producte = $_POST['id'];
     $nom_producte = $_POST['name'];
    $descripcio = $_POST['short_description'];


     $data = [ 'name' => $nom_producte,
                        'short_description' => $descripcio, ];

                    $woocommerce->put('products/' . $id_Producte, $data);

                   header("refresh:2; url=index.php#portfolio");
                    exit();
               
                ?>