<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall 25</title>
</head>
<body>
    <form method="post" action="">
        CT1: <input type="text" name="ct1"> <br>
        CT2: <input type="text" name="ct2"> <br>
        CT3: <input type="text" name="ct3"> <br>
        Mid: <input type="text" name="Mid"> <br>
        Final: <input type="text" name="Final"> <br>
        <button name="btn">Calculate</button>
    </form>

    <?php  
    
    $best2 = ($_POST["ct1"]+$_POST["ct2"]+$_POST["ct3"] - min($_POST["ct1"], $_POST["ct2"], $_POST["ct3"]))/2;
    
    $total = $best2 + $_POST["Final"] + $_POST["Mid"];

    ?>


</body>
</html>