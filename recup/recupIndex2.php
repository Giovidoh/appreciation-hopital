<?php
    // if(isset($_POST['appreciation']) && isset($_POST['rangevalue'])){
    if(isset($_POST['send'])){
        $appreciation = $_POST['appreciation2'];
        $note = (int)$_POST['rangevalue'];

        $sql = "INSERT INTO observation VALUES (NULL, $note, '$appreciation')";
        $resultat = mysqli_query($connexion, $sql);
        if($resultat){
            $message = "Insertion réussie !";
        }else{
            $message = "Échec de l'insertion !";
        }
    }
?>