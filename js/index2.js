const range = document.getElementById("range");
const rangeValue = document.getElementById("rangeValue");
const emojiBox = document.getElementById("emoji-box2__items__box");
const appreciation = document.getElementById("appreciation2");

range.addEventListener("input", function(){
    rangeValue.innerHTML = range.value;
    if(range.value < 3.33){
        emojiBox.style.top = "-100px";
        appreciation.value = "Médiocre";
    }else if(range.value < 6.66){
        emojiBox.style.top = "-200px";
        appreciation.value = "Passable";
    }else if(range.value < 9.99){
        emojiBox.style.top = "-300px";
        appreciation.value = "Assez-bien";
    }else if(range.value < 13.32){
        emojiBox.style.top = "-400px";
        appreciation.value = "Neutre";
    }else if(range.value < 16.65){
        emojiBox.style.top = "-500px";
        appreciation.value = "Bien";
    }else if(range.value < 20){
        emojiBox.style.top = "-600px";
        appreciation.value = "Très-bien";
    }
    
})