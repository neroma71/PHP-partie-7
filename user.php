<?php
if( !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["civi"])){
    echo "bonjour ".$_POST['civi']." ".$_POST['nom']." ".$_POST['prenom'];
}
    else{
        echo "veuillez remplir tous les champs";
    }
?>