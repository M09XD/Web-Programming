function calc() {
    let location = document.getElementById("location").value;
    let urban = document.getElementById("urban").checked;
    let rural = document.getElementById("rural").checked;
    let raw = document.getElementById("units").value;
    let units = Number(raw);

    if (location == "") {
        alert("Select a location.");
        return;
    }
    if (!urban && !rural) {
        alert("Choose Urban or Rural.");
        return;
    }
    if (raw == "" || isNaN(units) || units <= 0) {
        alert("Unit Consumed must be a positive number.");
        return;
    }

    let rate;
    if (location == "Dhaka") {
        rate = urban ? 7.5 : 6.5;
    } else if (location == "Chattogram") {
        rate = urban ? 7.0 : 6.0;
    } else {
        rate = urban ? 6.5 : 5.5;
    }

    let bill = units * rate;
    let surcharge = 0;
    if (bill > 1000) {
        surcharge = bill * 0.10;
    } else if (bill >= 500) {
        surcharge = bill * 0.05;
    }

    alert("Final bill: " + (bill + surcharge).toFixed(2) + " taka");
}
