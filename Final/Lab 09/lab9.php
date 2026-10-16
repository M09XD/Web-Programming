<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <form method="post" action="submit.php">
        <input type="text" name="email"> <br>
        <input type="text" name="password"> <br>
        <button name="btn">Submit</button>
    </form>

    <?php
        echo "<b style='color:red'>Hello world</b> <br>";
        $name = "Mahmudul";
        $age = 26;

        echo "My name is $name <br>";
        echo "My age is ". $age . "<br>";

        // creating and calling a function
        function sum($a, $b){
            return $a+$b;
        }
        echo sum(10,5);

        echo "<br>";

        //If condition checks if the button is SET or not
        if( isset($_POST["btn"]) )
            echo $_POST["email"] . " and the password is ". $_POST["password"];
        

    ?>
    
</body>
</html>