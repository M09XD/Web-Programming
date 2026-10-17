//default funtion
function functionName(){

    let text = document.getElementById("name1").value.toLowerCase();
    let number = document.getElementById("name2").value;

    //Print
    document.getElementById("out").innerText = "Result " + text;
    document.getElementById("show").innerHTML = "Result " + text;

    // build the reversed string using a for loop for Palindrome
    let reversed = "";
    for(let i = text.length - 1; i >= 0; i--){
        reversed += text.charAt(i);
    }
    // compare original and reversed
    if(text == reversed)
    
    //GUESSing game
    //outside function global values
    let secret = Math.floor(Math.random() * (5000 - 500 + 1)) + 500; //setting random from 500-5000
    let count = 0;

    //inside function
    count++;
    let guess = Number(document.getElementById("name2").value);
    let ans = document.getElementById("out");

    if (guess == secret) {ans.innerText = "Correct!"; /*"here"*/} 
    else {
        if (guess > secret) {ans.innerText = "Too high!";} 
        else {ans.innerText = "Too low!";}
        if (count >= 5) {ans.innerText += " Out of guesses!";}
    }

    document.getElementById("name2").disabled = false; //enables input //put this as true in ^ if "here"
    document.getElementById("btn").disabled = false; //enables btn //put this as true in ^ if "here"
    document.getElementById("name2").value = "";  //clears input field
    document.getElementById("out").innerText = "";  //clears display field

    //Round the number to 2.dp
    document.getElementById("out").innerText = "Result " + number.toFixed(2) + "<br>";

}

//Passward check function
    let attempts = 0;

    function checkStrength() {
        attempts++;
        let password = document.getElementById("password").value;
        let score = 0;

        if (password.length >= 6) {
            score += Math.floor((password.length - 6) / 2) * 10;
            if (/[A-Z]/.test(password)) { score += 15; }
            if (/[a-z]/.test(password)) { score += 15; }
            if (/[0-9]/.test(password)) { score += 20; }
            if (/[!@#$%^&*]/.test(password)) { score += 25; }
        }

        let level;
        if (score >= 100) { level = "Perfect Password! Success!"; }
        else if (score >= 91) { level = "Very Strong"; }
        else if (score >= 71) { level = "Strong"; }
        else if (score >= 51) { level = "Medium"; }
        else if (score >= 31) { level = "Weak"; }
        else { level = "Very Weak"; }

        if (attempts > 8 && score < 71) {
            level += "\nNeed practice! Use 10+ characters with upper, lower, digits and !@#$%^&*";
        }

        document.getElementById("label").innerText =
            level + "\nScore: " + score + "\nAttempt: " + attempts;
    }

    //Array Stack function
    let goal = 20;
    let totalHours = 0;
    let sessions = 0;
    let subjects = [];

    function addStudy() {
        let subject = document.getElementById("subject").value;
        let hours = Number(document.getElementById("hours").value);

        totalHours += hours;
        sessions++;
        subjects.push(subject);
        let average = totalHours / sessions;

        let feedback;
        if (totalHours <= 5) { feedback = "Start studying regularly!"; }
        else if (totalHours <= 12) { feedback = "Good progress!"; }
        else if (totalHours < goal) { feedback = "Almost ready!"; }
        else { feedback = "Weekly goal reached!"; }

        if (sessions > 7 && totalHours < goal) {
            feedback = "Increase your study time!";
        }

        document.getElementById("out").innerText =
            "Total: " + totalHours + " hours, Average: " + average +
            " hours, Subjects: [" + subjects.join(", ") + "], " + feedback;
    }


    //electric bill calc funtion
    function calculateBill(){
    let location = document.getElementById("location").value;
    let urban = document.getElementById("urban").checked;   // true if Urban is selected
    let rural = document.getElementById("rural").checked;   // true if Rural is selected
    let unit = Number(document.getElementById("unit").value);

    // ---------- validation ----------
    if(location == ""){
        alert("Error: Please select a location!");
        return;
    }
    if(urban == false && rural == false){
        alert("Error: Please select an area type (Urban or Rural)!");
        return;
    }
    if(urban == true && rural == true){
        alert("Error: Select only one area type!");
        return;
    }
    if(isNaN(unit) || unit <= 0){
        alert("Error: Unit consumed must be a positive number!");
        return;
    }

    // ---------- rate per unit ----------
    let rate = 0;
    if(location == "dhaka"){
        if(urban == true) rate = 7.5;
        else rate = 6.5;
    }
    else if(location == "chattogram"){
        if(urban == true) rate = 7.0;
        else rate = 6.0;
    }
    else{
        if(urban == true) rate = 6.5;
        else rate = 5.5;
    }

    let bill = unit * rate;

    // ---------- surcharge ----------
    if(bill < 500){
        bill = bill;                    // no surcharge
    }
    else if(bill <= 1000){
        bill = bill + bill * 0.05;      // 5%
    }
    else{
        bill = bill + bill * 0.10;      // 10%
    }

    alert("Final bill: " + bill.toFixed(2) + " taka");
}


