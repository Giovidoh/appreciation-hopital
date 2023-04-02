<!-- CONNEXION À LA BDD -->
<?php
    include("php-partials/connectionDB.php");
?>

<!-- RECUPERATION DES DONNÉES ENTRÉES -->
<?php
    include("recup/recupIndex.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Première solution</title>
</head>
<body>
    <?php
        if(isset($message)){
            echo $message;
        }
    ?>
    <h3 class="page-title">Veuillez choisir l'observation qui vous convient</h3>
    <form class="emoji-box" method="POST">
        <input id="appreciation" name="appreciation" type="text" value="">
        <div class="emoji-box__items">
            <div class="emoji-box__item">
                <img src="images/smiling-face-with-smiling-eyes2.png" alt="emoticon souriant avec les yeux souriants">
                <label for="">Très-bien</label>
            </div>
    
            <div class="emoji-box__item">
                <img src="images/slightly-smiling-face2.png" alt="emoticon souriant">
                <label for="">Bien</label>
            </div>
    
            <div class="emoji-box__item">
                <img src="images/neutral-face2.png" alt="emoticon neutre">
                <label for="">Neutre</label>
            </div>
    
            <div class="emoji-box__item">
                <img src="images/slightly-frowning-face2.png" alt="emoticon légèrement triste">
                <label for="">Assez-bien</label>
            </div>
    
            <div class="emoji-box__item">
                <img src="images/frowning-face2.png" alt="emoticon triste">
                <label for="">Passable</label>
            </div>
            
            <div class="emoji-box__item">
                <img src="images/pouting-face2.png" alt="emoticon fâché">
                <label for="">Médiocre</label>
            </div>
        </div>

        <input type="submit" name="send" class="emoji-box__submit" value="Envoyer">
    </form>


    <script src="js/index.js"></script>
</body>
</html>

<!-- FERMETURE DE LA CONNEXION À LA BDD -->
<?php
    mysqli_close($connexion);
?>