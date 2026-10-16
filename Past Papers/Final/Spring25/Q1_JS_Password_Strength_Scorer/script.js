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
