<?php include('header.php'); ?>


<?php include('connexio_woo.php'); ?>

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-top: 8%;
        margin-bottom: 3%;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0 15px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="servei_afegeix_id.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom producte:</label><br>
    <input type="text" id="nom" name="nom"><br>

    <label for="preu">Preu:</label><br>
    <input type="text" id="preu" name="preu"><br>

    <label for="descripcio">Descripció:</label><br>
    <input type="text" id="descripcio" name="descripcio"><br>
    <br>

    <label for="file">Imatge:</label><br>
    <input type="file" id="file" name="file">

    <br><br>
    <input type="submit" value="Afegir">

</form>

<?php include('footer.php'); ?>