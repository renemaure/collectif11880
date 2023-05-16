<?php
/*var_dump($_POST);
var_dump($_FILES);*/

if(isset($_FILES['file'])){
    $tmpName = $_FILES['file']['tmp_name'];
    $nameimg = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];

    $tabExtension = explode('.', $nameimg);
    $extension = strtolower(end($tabExtension));
    //Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg'];
    if(in_array($extension, $extensions)){
        move_uploaded_file($tmpName, './upload/'.$nameimg);
    }
    else{
        echo "Mauvaise extension";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<body>
    <form action="envoie_img.php" method="POST" enctype="multipart/form-data">
      
        <input type="file" name="file">
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>