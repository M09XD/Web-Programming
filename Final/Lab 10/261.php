<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tourism";
    $port = 3306;

    $conn = new mysqli($server,$user,$password,$database,
                    $port);
    
    //que 1
    $sql1 = "SELECT SpotName, Region, Rating
FROM tourist_spot
WHERE Rating > 4.5 OR SpotName LIKE '%Beach%'
ORDER BY Rating desc";

    $res = $conn->query($sql1);

    while($row = $res->fetch_assoc()){
        echo $row["SpotName"]. " ". $row["Region"]. " ".$row["Rating"] . "<br>";
        
    }


    //que2
    $sql2 = "UPDATE tourist_spot
SET Rating = Rating+0.2, EntryFee = EntryFee *1.1
WHERE Rating >=4.0 AND Rating <=4.5 AND EntryFee > 0";

    $res = $conn->query($sql2);

    echo "Updated <br>";

    //que3 
    $sql3 = "SELECT Category, COUNT(SpotID), AVG(Rating), SUM(VisitorsPerYear)
FROM tourist_spot
GROUP BY Category
HAVING AVG(Rating) > 4.4
ORDER BY AVG(Rating) DESC";
    $res = $conn->query($sql3);

    while($row = $res->fetch_assoc()){
        echo $row["Category"]. " ". $row["COUNT(SpotID)"]. " ".$row["AVG(Rating)"] ." ".$row["SUM(VisitorsPerYear)"]. "<br>";
        
    }
?>