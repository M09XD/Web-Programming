<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall 25</title>
</head>
<body>
    <form method="post">
        CT1: <input type="text" name="ct1"> <br>
        CT2: <input type="text" name="ct2"> <br>
        CT3: <input type="text" name="ct3"> <br>
        Mid: <input type="text" name="mid"> <br>
        Final: <input type="text" name="final"> <br>

        <button name="btn">Calculate</button>
    </form>

    <?php
        $bestTwo = ($_POST["ct2"]+$_POST["ct2"]+$_POST["ct3"]
                     - min($_POST["ct1"],$_POST["ct2"],$_POST["ct3"])
                    )/2;

        $total = $bestTwo + $_POST["mid"]+$_POST["final"];
        if($total > 54)
            $status = "Passed";
        else 
            $status = "Failed";

        echo "Best two: ". $bestTwo. "<br>";
        echo "Mid: ". $_POST["mid"]. "<br>";
        echo "Final: ". $_POST["final"]. "<br>";
        echo "Total: ". $total. "<br>";
        echo "Status: ". $status;


    ?>
    
</body>
</html>