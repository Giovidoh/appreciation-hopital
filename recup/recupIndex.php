<?php
    if(isset($_POST['send'])){
        $appreciation = $_POST['appreciation'];
        $commentaire = trim(addslashes($_POST['comment']));
        $nom = trim(addslashes($_POST['nom']));
        $contact = (int)$_POST['contact'];
        if($appreciation===""){
            $message = "Veuillez-sélectionner une observation !";
        }else{
            $sql = "INSERT INTO observation
                VALUES(NULL, '$appreciation', '$commentaire', '$nom', '$contact');";
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