<?php
    if(isset($_POST['send'])){
        extract($_POST);
        if($appreciation===""){
            $message = "Veuillez-sélectionner une observation !";
        }else{
            $sql = "INSERT INTO observation
                VALUES(NULL, 0, \"$appreciation\");";
            $resultat = mysqli_query($connexion, $sql);
            if($resultat){
                $message = "Votre observation a été soumise !";
            }else{
                $message = "La soumission de l'observation a échoué !";
            }
        }

    }
?>