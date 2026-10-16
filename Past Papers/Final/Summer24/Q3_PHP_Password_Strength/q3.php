<form method="post">
    Password: <input type="password" name="pw">
    <button name="btn">Check</button>
</form>
<?php
if (isset($_POST["btn"])) {
    $password = $_POST["pw"];
    $length = strlen($password);
    $upper = preg_match("/[A-Z]/", $password);
    $lower = preg_match("/[a-z]/", $password);
    $digit = preg_match("/[0-9]/", $password);
    $special = preg_match("/[^A-Za-z0-9]/", $password);

    if ($length >= 10 && $upper && $lower && $digit && $special && substr($password, -1) == "*") {
        $strength = "Strong";
    } elseif ($length >= 8 && $upper && $lower && $digit) {
        $strength = "Medium";
    } elseif ($length >= 6 && $upper) {
        $strength = "Poor";
    } else {
        $strength = "Very Poor";
    }
    echo $strength;
}
?>
