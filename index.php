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

    <div class="container">
        
        <?php
            if(isset($message) && isset($type)):
        ?>
            <p class="failure-success-message <?= $type; ?>">
                <?php
                    echo $message;
                ?>
            </p>
        <?php
            endif;
        ?>

        <div class="container__heading">
            <span class="container__heading__pharmacy">LA PHARMACIE &laquo;BOULEVARD&raquo;</span>
            <span class="container__heading__wish">vous souhaite <b>bonne guérison !</b></span>
        </div>
        <h3 class="container__question">Comment avez vous trouvé notre service ? </h3>
        <form class="emoji-box" method="POST" autocomplete="off">
            <input id="appreciation" name="appreciation" type="text" value="">
            <div class="emoji-box__items">
                <div class="emoji-box__item">
                    <img src="images/smiling-face-with-smiling-eyes2.png" alt="emoticon souriant avec les yeux souriants">
                    <label for="">Très satisfait</label>
                </div>
        
                <div class="emoji-box__item">
                    <img src="images/slightly-smiling-face2.png" alt="emoticon souriant">
                    <label for="">Satisfait</label>
                </div>

                <div class="emoji-box__item">
                    <img src="images/frowning-face2.png" alt="emoticon triste">
                    <label for="">Peu satisfait</label>
                </div>
                
                <div class="emoji-box__item">
                    <img src="images/pouting-face2.png" alt="emoticon fâché">
                    <label for="">Pas du tout satisfait</label>
                </div>
            </div>

            <span class="emoji-box__feedback__heading">Vous pouvez nous laisser un commentaire pour l'amélioration continue du service (Ce n'est pas obligatoire)</span>

            <table class="emoji-box__feedback">
                
                <tr class="emoji-box__feedback__comment">
                    <td><label for="">Commentaire</label></td>
                    <td><textarea name="comment" id="comment" cols="30" rows="10"></textarea></td>
                </tr>

                <tr class="emoji-box__feedback__name">
                    <td><label for="">Votre nom</label></td>
                    <td><input name="nom" type="text"></td>
                </tr>

                <tr class="emoji-box__feedback__contact">
                    <td><label for="">Votre contact</label></td>
                    <td><input name="contact" type="text"></td>
                </tr>
            </table>

            <input type="submit" name="send" class="emoji-box__submit" value="Envoyer">
        </form>
    </div>

    <script src="js/index.js"></script>
</body>
</html>

<!-- FERMETURE DE LA CONNEXION À LA BDD -->
<?php
    mysqli_close($connexion);
?>