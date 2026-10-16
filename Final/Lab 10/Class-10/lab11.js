function change(){
    let textElement = document.getElementById("text");
    let randomColor = "#" + Math.floor(Math.random()*16777215).toString(16);
    textElement.style.color = randomColor;
}

function theme(){
    let bodyElement = document.body;
    let textElement = document.getElementById("text");

    if (bodyElement.style.backgroundColor === "black") {
        bodyElement.style.backgroundColor = "white";
    
        if (textElement.style.color === "white") {
            textElement.style.color = "black";
        }
    } else {

        bodyElement.style.backgroundColor = "black";
        textElement.style.color = "white";
    }
}
