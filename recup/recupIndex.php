<?php
    if(isset($_POST['send'])){
        $appreciation = $_POST['appreciation'];
        $commentaire = trim(addslashes($_POST['comment']));
        $nom = trim(addslashes($_POST['nom']));
        $contact = (int)$_POST['contact'];
        if($appreciation===""){
            $message = "Veuillez-sélectionner une observation !";
            $type = "failure";
        }else{
            $currenteDate = date("Y-m-d", time());
            $sql = "INSERT INTO observation
                    VALUES(NULL, '$appreciation', '$commentaire', '$nom', '$contact', '$currenteDate');";
            $resultat = mysqli_query($connexion, $sql);
            if($resultat){
                header("Location:remerciement.html");
            }else{
                $message = "La soumission de l'observation a échoué ! Veuillez réessayer s'il vous plaît !";
                $type = "failure";
            }
        }

    }
?>