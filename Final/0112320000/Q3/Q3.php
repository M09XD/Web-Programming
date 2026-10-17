<?php
    #Copy folder to C:\xampp\htdocs
    #Open xampp check "documentroot" of Apache(httpd.conf)
    #Start Apache & MySQL
    #check http://localhost/0112320000/
    #Go to http://localhost/phpmyadmin 
    #Click New -> db_name -> Create -> table_name + columnNo
    #First column name + int + index(primary)
    #Rest column name + int [for number data]
    #Rest column name + Var + Value(20) [for text data]
    #insert rowNo
    #insert all the data then click -> go
    #Then Export the SQL file and move it to C:\xampp\htdocs\0112320000\Q3
    

    $conn = new mysqli("localhost","root","","db_name", 3306);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    echo "<h3>Q3(1)</h3><br>";
    $query1 = "PasteSQLqueryQ1";

    $store = $conn->guery($query1);
    while($show = $store->fetch_assoc()){
        echo "Column Name: ".$show['columnName']."<br>";
    }

    echo "<h3>Q3(2)</h3><br>";
    $query2 = "PasteSQLqueryQ2";

    $store = $conn->guery($query2);
    while($show = $store->fetch_assoc()){
        echo "Column Name: ".$show['columnName']."<br>";
    }

    echo "<h3>Q3(3)</h3><br>";
    $query3 = "PasteSQLqueryQ3";

    $store = $conn->guery($query3);
    while($show = $store->fetch_assoc()){
        echo "Column Name: ".$show['columnName']."<br>";
    }

    echo "<h3>Q3(4)</h3><br>";
    $query4 = "PasteSQLqueryQ4";

    $store = $conn->guery($query4);
    while($show = $store->fetch_assoc()){
        echo "Column Name: ".$show['columnName']."<br>Column Name: ".$show['columnName']."<br>";
    }

    $conn->close();
?>