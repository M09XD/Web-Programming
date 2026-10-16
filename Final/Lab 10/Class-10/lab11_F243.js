let min = 500;
let max = 5000;

let secretNumber = Math.floor(Math.random() * (max - min + 1)) + min;
let count = 0;

console.log("Secret Number:", secretNumber);

let guess = Number(document.getElementById("guess").value);
let ansLabel = document.getElementById("ans");
let guessInput = document.getElementById("guess");
let submitBtn = document.getElementById("btn");

function numberGuess(){
    count++;

    if(guess == secretNumber){
        ansLabel.innerText = "\nCorrect!";
        guessInput.disabled = true;
        submitBtn.disabled = true; 
        return;
    }
    else if(guess > secretNumber){
        ansLabel.innerText = "\nToo High!";
    }
    else if(guess < secretNumber){
        ansLabel.innerText = "\nToo Low!";
    }

    if(count >= 5){
        ansLabel.innerText = "\nOut of Guesses! \n The number was " + secretNumber;
        submitBtn.disabled = true;
        guessInput.disabled = true;
    }
}

function reset(){
    count = 0;

    secretNumber = Math.floor(Math.random() * (max - min + 1)) + min;
    console.log("New Secret Number:", secretNumber);

    document.getElementById("guess").value = "";
    ansLabel.innerText = "";
    guessInput.disabled = false;
    submitBtn.disabled = false;
}
