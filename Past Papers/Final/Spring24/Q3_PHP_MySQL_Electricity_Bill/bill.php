<?php
if (isset($_POST["btn"])) {
    $location = $_POST["location"];
    $area = $_POST["area"];
    $units = (float)$_POST["units"];

    $conn = new mysqli("localhost", "root", "", "electricity_bill");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $location = $conn->real_escape_string($location);
    $area = $conn->real_escape_string($area);
    $res = $conn->query("SELECT * FROM bill_info WHERE Location='$location' AND Area='$area'");

    if ($units <= 0 || !$res || $res->num_rows == 0) {
        echo "Enter valid information.";
    } else {
        $row = $res->fetch_assoc();

        // Progressive slabs: first 75 units, next 125 units, then remaining units.
        if ($units <= 75) {
            $bill = $units * $row["Rate1"];
        } elseif ($units <= 200) {
            $bill = 75 * $row["Rate1"] + ($units - 75) * $row["Rate2"];
        } else {
            $bill = 75 * $row["Rate1"] + 125 * $row["Rate2"] + ($units - 200) * $row["Rate3"];
        }

        $tax = $bill * $row["Tax"] / 100;
        echo "Bill: " . number_format($bill, 2) . " BDT<br>";
        echo "Tax: " . number_format($tax, 2) . " BDT<br>";
        echo "Total: " . number_format($bill + $tax, 2) . " BDT";
    }
    $conn->close();
}
?>
