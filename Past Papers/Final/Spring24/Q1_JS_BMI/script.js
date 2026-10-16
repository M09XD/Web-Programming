function calc() {
    let cm = Number(document.getElementById("cm").value);
    let lb = Number(document.getElementById("lb").value);

    if (cm <= 0 || lb <= 0 || isNaN(cm) || isNaN(lb)) {
        document.getElementById("res").innerText = "Enter positive numbers.";
        return;
    }

    let metre = cm / 100;
    let kg = lb / 2.2046;
    let result = kg / (metre * metre);
    let status;

    if (result < 20) {
        status = "bad";
    } else if (result <= 30) {
        status = "not bad";
    } else {
        status = "good";
    }

    document.getElementById("res").innerHTML =
        "Result: " + result.toFixed(2) + "<br>Status: " + status;
}
