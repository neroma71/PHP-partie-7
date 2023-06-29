<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    <?php
if( !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["civi"])){
    echo "bonjour ".$_POST['civi']." ".$_POST['nom']." ".$_POST['prenom'];
}
if(!empty($_FILES["fichier"]['tmp_name'])){
 $monFichier = $_FILES['fichier']['tmp_name'];

 if(is_uploaded_file($_FILES['fichier']['tmp_name'])){
    $file_extension = strrchr($file_name, ".");
    $extensions_autorisees = array('.pdf', '.PDF');
    if(in_array($file_extension, $extensions_autorisees)){
        echo "bon fichier";   
    }else{
        echo "ce n'est pas du format pdf";
    }
 }
}
    else{
    ?>

    <form action="" method="post" enctype="multipart/from-data">
        <p>
        <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
        <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom">
        </p>
        <p>
        <label for="civilite">Civilités :</label>
            <select id="civilite" name="civi">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
        </p>
        <p>
        <label for="fichier">Photo :</label>
            <input type="file" name="fichier" id="fichier">
        </p>
        <input type="submit" value="envoyer">
    </form>
    <?php
    }
    ?>
</body>
</html>