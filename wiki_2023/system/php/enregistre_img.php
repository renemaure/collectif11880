<?php
/*
fichier de traitement pour enregistrer une image dans le wiki
créé le 26/02/2023 par le collectif 11880
pour le wiki du collectif
version beta 1.0.0.
*/

if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg'];
    if(in_array($extension, $extensions)){
        move_uploaded_file($tmpName, './images/'.$name);
    }
    else{
        echo "Mauvaise extension";
    }
}

?>