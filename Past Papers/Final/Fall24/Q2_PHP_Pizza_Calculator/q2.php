<form method="post">
    Students: <input type="number" name="students"><br>
    Slices per student: <input type="number" name="perStudent"><br>
    Slices per pizza: <input type="number" name="perPizza"><br>
    <button name="btn">Calculate</button>
</form>
<?php
function calculate($students, $perStudent, $perPizza) {
    if ($perPizza <= 0) {
        echo "Slices per pizza must be greater than zero.";
        return;
    }

    $needed = $students * $perStudent;
    $pizzas = ceil($needed / $perPizza);
    $left = $pizzas * $perPizza - $needed;
    $wasted = (1050 / $perPizza) * $left;

    echo "<table border='1'><tr><th>Total Pizzas</th><th>Leftover Slices</th><th>Wasted Money (BDT)</th></tr>";
    echo "<tr><td>$pizzas</td><td>$left</td><td>" . number_format($wasted, 2) . "</td></tr></table>";
}
if (isset($_POST["btn"])) {
    calculate((int)$_POST["students"], (int)$_POST["perStudent"], (int)$_POST["perPizza"]);
}
?>
