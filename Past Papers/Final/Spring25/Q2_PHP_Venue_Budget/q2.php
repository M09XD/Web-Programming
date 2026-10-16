<form method="post">
    Attendees: <input type="number" name="people"><br>
    Cost per person: <input type="number" name="cost"><br>
    Venue capacity: <input type="number" name="cap"><br>
    <button name="btn">Calculate</button>
</form>
<?php
function calculate($people, $cost, $cap) {
    if ($cap <= 0) {
        echo "Venue capacity must be greater than zero.";
        return;
    }
    $venues = ceil($people / $cap);
    $empty = $venues * $cap - $people;
    $wasted = $empty * $cost;

    echo "Total Venues: $venues<br>Empty Seats: $empty<br>";
    echo "Wasted Money (BDT): " . number_format($wasted, 2);
    // The paper also mentions a fixed 15,000 BDT venue cost, but the sample outputs
    // use empty seats * cost per person. This solution follows the sample outputs.
}
if (isset($_POST["btn"])) {
    calculate((int)$_POST["people"], (int)$_POST["cost"], (int)$_POST["cap"]);
}
?>
