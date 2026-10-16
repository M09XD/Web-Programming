<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Multiplication Table</title></head>
<body>
    <form method="post">
        Enter the value of n: <input type="number" name="n" value="10">
        <button name="btn">Generate Table</button>
    </form>

    <?php
    if (isset($_POST["btn"])) {
        $n = (int)$_POST["n"];
        if ($n > 0) {
            echo "<table border='1' cellpadding='5'>";
            for ($i = 1; $i <= $n; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $n; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Enter a positive value for n.";
        }
    }
    ?>
</body>
</html>
