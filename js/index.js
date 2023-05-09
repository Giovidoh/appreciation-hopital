const tableauAppreciations = document.querySelectorAll(".emoji-box__item");
const appreciationChoisie = document.getElementById("appreciation");

tableauAppreciations.forEach(appreciation => {
    appreciation.addEventListener("click", function(){
        //Récupérer l'élément label de la div qui a été cliquée
        const labelTag = this.querySelector("label");

        //L'affecter dans l'appréciation choisie
        appreciationChoisie.value = labelTag.textContent;

        //Appliquer le nouveau style de l'élément sélectionné
        //Enlever la classe active pour tous les éléments
        tableauAppreciations.forEach(appreciation =>{
            appreciation.classList.remove("active");
        })

        //Activer l'élément sélectionné
        this.classList.add("active");

    })
})

//Afficher la partie commentaire au clique du bouton d'ajout de commentaire
const commentButton = document.getElementById("commentBtn");
const commentTable = document.getElementById("commentTable");

commentButton.addEventListener("click", function(){
    commentTable.classList.add("active");
})

//Contrôler le champ du numéro de téléphone
const champContact = document.getElementById("contact");
const erreurContact = document.getElementById("erreurContact");

champContact.addEventListener("keydown", (e) => {
    const key = e.key;
    
    //Vérifier si la touche est numérique ou "supprimer" ou "delete"
    if((key >= "0" && key <= "9") || key === "Backspace" || key === "Delete"){
        //Ne rien faire
        erreurContact.style.display = "none";
        return true;
    }else{
        //Empêcher l'entrée des caractères non autorisés
        e.preventDefault();
        erreurContact.style.display = "block";
        return false;
    }
})