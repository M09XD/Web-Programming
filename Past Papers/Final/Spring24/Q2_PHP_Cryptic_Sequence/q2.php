<form method="post">
    Seed value: <input type="number" name="seed"><br>
    Terms: <input type="number" name="terms"><br>
    <button name="btn">Generate</button>
</form>
<?php
if (isset($_POST["btn"])) {
    $n = (int)$_POST["seed"];
    $terms = (int)$_POST["terms"];

    for ($i = 1; $i <= $terms; $i++) {
        echo $n;
        if ($i < $terms) {
            echo ", ";
        }

        $temp = $n;
        $digitSum = 0;
        $digitProduct = 1;
        while ($temp > 0) {
            $digit = $temp % 10;
            $digitSum = $digitSum + $digit;
            $digitProduct = $digitProduct * $digit;
            $temp = (int)($temp / 10);
        }

        // The written rule says product, but the printed samples follow digit sum.
        // Keep digitSum to match the sample outputs. Use digitProduct for the written rule.
        $n = $n + $digitSum;
        // $n = $n + $digitProduct;
    }
}
?>
