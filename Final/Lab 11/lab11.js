//function to change the color of the paragraph
function change(){
    let paragraph = document.getElementById("text");
    paragraph.style.color = "red";
    paragraph.style.fontSize = "Larger";
}

//function to switch theme
let toggle = 1;
function theme(){
    if(toggle == 1){
        let body = document.body;
        body.style.backgroundColor = "black";
        body.style.color = "white";

        toggle = 0;
    }
    else{
        let body = document.body;
        body.style.backgroundColor = "white";
        body.style.color = "black";

        toggle= 1;
    }
    
}