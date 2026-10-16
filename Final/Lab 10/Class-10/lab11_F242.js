function calculateBill() {
    // 1. Fetch Input Values
    let location = document.getElementById("location").value;
    let unitsInput = document.getElementById("units").value;
    
    let selectedArea = document.querySelector('input[name="area"]:checked');
    let area = selectedArea ? selectedArea.value : null;

    // 2. Input Validation Rules
    if (!location) {
        alert("Error: Please select a location.");
        return;
    }
    if (!area) {
        alert("Error: Please choose an area type (Urban or Rural).");
        return;
    }
    if (unitsInput === "" || Number(unitsInput) <= 0) {
        alert("Error: Unit Consumed must be a positive number.");
        return;
    }

    let units = Number(unitsInput);
    let rate = 0;

    // 3. Determine Location & Area Rates
    if (location === "Dhaka") {
        rate = (area === "urban") ? 7.5 : 6.5;
    } else if (location === "Chattogram") {
        rate = (area === "urban") ? 7.0 : 6.0;
    } else { // Other locations
        rate = (area === "urban") ? 6.5 : 5.5;
    }

    // 4. Calculate Base Bill
    let baseBill = units * rate;
    let surcharge = 0;

    // 5. Calculate Surcharge Tiers
    if (baseBill >= 500 && baseBill <= 1000) {
        surcharge = baseBill * 0.05; // 5% surcharge
    } else if (baseBill > 1000) {
        surcharge = baseBill * 0.10; // 10% surcharge
    }

    let totalBill = baseBill + surcharge;

    // 6. Display Result rounded to 2 decimal places
    alert("Total Electricity Bill: " + totalBill.toFixed(2) + " Taka\n(Includes base bill: " + baseBill.toFixed(2) + " Taka & Surcharge: " + surcharge.toFixed(2) + " Taka)");
}
