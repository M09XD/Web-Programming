<form method="post">
    CT1: <input type="number" step="any" name="ct1"><br>
    CT2: <input type="number" step="any" name="ct2"><br>
    CT3: <input type="number" step="any" name="ct3"><br>
    Mid: <input type="number" step="any" name="mid"><br>
    Final: <input type="number" step="any" name="final"><br>
    <button name="btn">Calculate</button>
</form>
<?php
if (isset($_POST["btn"])) {
    $ct1 = (float)$_POST["ct1"];
    $ct2 = (float)$_POST["ct2"];
    $ct3 = (float)$_POST["ct3"];
    $mid = (float)$_POST["mid"];
    $final = (float)$_POST["final"];

    $bestTwoAverage = ($ct1 + $ct2 + $ct3 - min($ct1, $ct2, $ct3)) / 2;
    $total = $bestTwoAverage + $mid + $final;

    if ($total > 54) {
        $status = "Passed";
    } else {
        $status = "Failed";
    }

    echo "Best two CT average: $bestTwoAverage<br>";
    echo "Mid: $mid<br>Final: $final<br>Total: $total<br>Status: $status";
}
?>
