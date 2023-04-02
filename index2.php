<!-- CONNEXION À LA BDD -->
<?php
    include("php-partials/connectionDB.php");
?>

<!-- RECUPERATION DES DONNÉES ENTRÉES -->
<?php
    include("recup/recupIndex2.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Deuxième solution</title>
</head>
<body>
    <?php
        if(isset($message)){
            echo $message;
        }
    ?>
    <h3 class="page2-title">Jaugez pour donner votre observation</h3>
    <form class="emoji-box2" method="POST">
        <div class="emoji-box2__items">
            <div id="emoji-box2__items__box" class="emoji-box2__items__box">
                <div class="emoji-box2__item">
                    <img src="images/neutral-face2.png" alt="emoticon neutre">
                </div>

                <div class="emoji-box2__item">
                    <img src="images/pouting-face2.png" alt="emoticon fâché">
                </div>

                <div class="emoji-box2__item">
                    <img src="images/frowning-face2.png" alt="emoticon triste">
                </div>
                
                <div class="emoji-box2__item">
                    <img src="images/slightly-frowning-face2.png" alt="emoticon légèrement triste">
                </div>
                
                <div class="emoji-box2__item">
                    <img src="images/neutral-face2.png" alt="emoticon neutre">
                </div>
                
                <div class="emoji-box2__item">
                    <img src="images/slightly-smiling-face2.png" alt="emoticon souriant">
                </div>
        
                <div class="emoji-box2__item">
                    <img src="images/smiling-face-with-smiling-eyes2.png" alt="emoticon souriant avec les yeux souriants">
                </div>
                
            </div>
        </div>
        <input id="appreciation2" name="appreciation2" for="" value="Neutre">
        <input id="range" name="rangevalue" type="range" class="emoji-box2__range" min="0" max="20" value="10">
        <span id="rangeValue" class="emoji-box2__rangeValue">10</span>
        <input type="submit" name="send" class="emoji-box2__submit" value="Envoyer">
    </form>



    <script src="js/index2.js"></script>
</body>
</html>

<!-- FERMETURE DE LA CONNEXION À LA BDD -->
<?php
    mysqli_close($connexion);
?>