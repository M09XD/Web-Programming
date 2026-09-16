<?php

    //if condition checks if the button is SER or NOT
    if(isset($_POST["btn"]))
    echo $_POST["email"] . "and the pasword is".$_POST["password"];

?>

<form method="post" action="index.php">
        <button name="btn">Submit</button>
    </form>