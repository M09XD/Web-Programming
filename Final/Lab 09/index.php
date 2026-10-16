<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <form method="post" action="submit.php">
        <input type="test" name="email"> <br>
        <input type="test" name="password"> <br>
        <button name="btn">Submit</button>
    </form>

   <?php 
    echo "<b style='color:red'>Hello World</b> <br>";
    $name = "Mahim";
    $age = 24;
    echo "My name is $name <br>";
    echo "My age is ". $age ."<br>";

    function sum($a, $b){
        return $a+$b;
    }

    echo sum(10, 5) ."<br>";

    $student = [ 
        "name" => "Mahim", 
        "id" => "0112320084",
        "university" => "UIU"];

    //if condition checks if the button is SER or NOT
    if(isset($_POST["btn"]))
    echo $_POST["email"] . "and the pasword is".$_POST["password"];

   ?> 
</body>
</html>