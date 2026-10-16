<form method="post">
    Attendees: <input type="number" name="people"><br>
    Seat capacity: <input type="number" name="cap"><br>
    Ticket price: <input type="number" name="price"><br>
    <button name="btn">Calculate</button>
</form>
<?php
function calculate($people, $cap, $price) {
    if ($cap <= 0) {
        echo "Seat capacity must be greater than zero.";
        return;
    }
    $screens = ceil($people / $cap);
    $empty = $screens * $cap - $people;
    $wasted = $empty * $price;

    echo "<table border='1'><tr><th>Total Screens</th><th>Empty Seats</th><th>Wasted Money</th></tr>";
    echo "<tr><td>$screens</td><td>$empty</td><td>" . number_format($wasted, 2) . "</td></tr></table>";
    // Fixed rental cost 25,000 BDT is not included in the paper's sample waste calculation.
}
if (isset($_POST["btn"])) {
    calculate((int)$_POST["people"], (int)$_POST["cap"], (int)$_POST["price"]);
}
?>
