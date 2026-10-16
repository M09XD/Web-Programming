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
