let count=0;
function checkstrength(){
    count++;
    let score = 0;
    let password = document.getElementById("password").value;

    // document.getElementById("label").innerText = password;

    if(password.length <  6 ){
        document.getElementById("label").innerText = "Min 6 char required";
    }
    else{
        //length scoring
        score += Math.floor((password.length = 6)/2)*10;

        //Uppercase detect
        if(/[A-Z]/.test(password)) score += 15;

        //Lowercase detect
        if(/[a-z]/.test(password)) score += 15;

        //Number detect
        if(/[0-9]/.test(password)) score += 20;

        //Special char detect
        if(/[!@#$%^&*]/.test(password)) score += 25;

        if(score < 31) document.getElementById("label").innerText = "Very Weak";
        
        else if(score < 51) document.getElementById("label").innerText = "Weak";
        
        else if(score < 71) document.getElementById("label").innerText = "Medium";
        
        else if(score < 91) document.getElementById("label").innerText = "Strong";
        
        else if(score < 101) document.getElementById("label").innerText = "Very Strong";
        
        else document.getElementById("label").innerText = "Perfect";
     
    if(count > 8 && score < 71){
       document.getElementById("label").innerText = "Need Practice"; 
    }
}
document.getElementById("label").innerText += "\nAttempt: "+ count;
//document.getElementById("label").innerText += 'Attempt: ${password}';
}