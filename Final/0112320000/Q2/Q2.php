<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <form action = "" method = "POST">
        input1 : <input type = "number" name = "input1"> <br><br>
        input2 : <input type = "number" name = "input2"> <br><br>
        input3 : <input type = "number" name = "input3"> <br><br>
        Password: <input type="password" name="pw">
        <button name = "submit">Submit</button> <br><br>
    </form>
    <?php
        if(isset($_POST['submit'])){

            #Calculations
            $input1 = (int)$_POST['input1'];
            $input2 = (float)$_POST['input2'];
            $input3 = (int)$_POST['input3'];

            $total1 = ceil(); #ceils the result 0.1->1.0
            $total1 = floor(); #floor the result 0.1->0.0

            echo "Total: ".$total1."<br>";

            $total2 = round(); #rounds the result (0.1-0.4)->0.0 or (0.5-0.9)->1.0  
            $total4 = numfmt_format($input2, 2); #float->str in 2.dp

            echo "Total: $total2<br>";

            $total3 = abs(); #non-negative number as result

            echo "Total3: $total3<br>Total2: $total2<br>";
            
            #password check
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

            #table Create
            $n = (int)$_POST["n"];
            if ($n > 0) {
                echo "<table border='1' cellpadding='5'>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr>"; #creates row
                    for ($j = 1; $j <= $n; $j++) {
                        echo "<td>" . ($i * $j) . "</td>"; #Creates Row ceil
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