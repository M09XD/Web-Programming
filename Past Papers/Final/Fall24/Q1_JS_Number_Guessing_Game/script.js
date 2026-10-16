let secret = Math.floor(Math.random() * (5000 - 500 + 1)) + 500;
let count = 0;

function numberGuess() {
    count++;
    let guess = Number(document.getElementById("guess").value);
    let ans = document.getElementById("ans");

    if (guess == secret) {
        ans.innerText = "Correct!";
        document.getElementById("guess").disabled = true;
        document.getElementById("submitBtn").disabled = true;
    } else {
        if (guess > secret) {
            ans.innerText = "Too high!";
        } else {
            ans.innerText = "Too low!";
        }

        if (count >= 5) {
            ans.innerText += " Out of guesses!";
            document.getElementById("guess").disabled = true;
            document.getElementById("submitBtn").disabled = true;
        }
    }
}

function resetGame() {
    secret = Math.floor(Math.random() * (5000 - 500 + 1)) + 500;
    count = 0;
    document.getElementById("guess").disabled = false;
    document.getElementById("submitBtn").disabled = false;
    document.getElementById("guess").value = "";
    document.getElementById("ans").innerText = "";
}
