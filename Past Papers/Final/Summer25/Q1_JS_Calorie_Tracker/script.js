let goal = 2000;
let total = 0;
let entries = 0;

function addCalories() {
    let cal = Number(document.getElementById("cal").value);
    total += cal;
    entries++;

    let feedback;
    if (total <= 800) { feedback = "You're off to a healthy start!"; }
    else if (total <= 1600) { feedback = "Good progress, keep it balanced!"; }
    else if (total < goal) { feedback = "Almost at your limit!"; }
    else { feedback = "Goal reached! Stay mindful!"; }

    if (entries > 10 && total < goal) {
        feedback = "Be cautious of frequent snacking!";
    }

    document.getElementById("out").innerText =
        "Total: " + total + " / " + goal + " (" + (total / goal * 100).toFixed(1) + "%)\n" +
        "Entries: " + entries + "\n" + feedback;
}
