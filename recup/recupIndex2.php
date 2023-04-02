<?php
    if(isset($_POST['send'])){
        $appreciation = $_POST['appreciation2'];
        $note = (int)$_POST['rangevalue'];

        $sql = "INSERT INTO observation VALUES (NULL, $note, '$appreciation')";
        $resultat = mysqli_query($connexion, $sql);
        if($resultat){
            $message = "Votre observation a été soumise !";
        }else{
            $message = "La soumission de l'observation a échoué !";
        }
    }
?>