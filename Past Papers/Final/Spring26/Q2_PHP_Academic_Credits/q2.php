<form method="post">
    Credits per course: <input type="number" step="any" name="credits"><br>
    Courses completed: <input type="number" name="courses"><br>
    Target credits: <input type="number" step="any" name="target"><br>
    <button name="btn">Calculate</button>
</form>
<?php
if (isset($_POST["btn"])) {
    $credits = (float)$_POST["credits"];
    $courses = (int)$_POST["courses"];
    $total = $credits * $courses;
    $target = (float)$_POST["target"];

    if ($total >= 120) {
        $progress = "Excellent";
    } elseif ($total >= 90) {
        $progress = "Good";
    } elseif ($total >= 60) {
        $progress = "Average";
    } else {
        $progress = "Poor";
    }

    $difference = $total - $target;
    if ($difference == 0) {
        $result = "Target met exactly (0 difference)";
    } elseif ($difference > 0) {
        $result = "Above target by " . $difference;
    } else {
        $result = "Below target by " . abs($difference);
    }

    echo "Total credits: $total<br>Progress: $progress<br>";
    echo "Target: $target<br>Result: $result";
}
?>
