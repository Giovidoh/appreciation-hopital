<?php
    $serveur = "localhost";
    $user = "root";
    $password = "";
    $dbname = "appreciation_hopital_test";

    $connexion = mysqli_connect($serveur, $user, $password, $dbname);
    if($connexion){
        // echo "Connexion réussie !";
    }else{
        echo "Échec de connexion !";
    }
?>