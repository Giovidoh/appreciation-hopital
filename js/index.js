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