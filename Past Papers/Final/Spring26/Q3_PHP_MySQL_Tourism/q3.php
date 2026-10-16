<?php
$conn = new mysqli("localhost", "root", "", "tourism");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>1. Selected tourist spots</h3>";
$res = $conn->query("SELECT SpotName, Region, Rating FROM tourist_spot
                     WHERE Rating > 4.5 OR SpotName LIKE '%Beach%'
                     ORDER BY Rating DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["SpotName"] . " | " . $row["Region"] . " | " . $row["Rating"] . "<br>";
}

$conn->query("UPDATE tourist_spot
              SET Rating = Rating + 0.2, EntryFee = EntryFee * 1.10
              WHERE Rating BETWEEN 4.0 AND 4.5 AND EntryFee > 0");
echo "<p>2. Updates completed.</p>";

echo "<h3>3. Statistics by category</h3>";
$res = $conn->query("SELECT Category, COUNT(*) AS spots, AVG(Rating) AS avg_rating,
                            SUM(VisitorsPerYear) AS visitors
                     FROM tourist_spot GROUP BY Category
                     HAVING AVG(Rating) > 4.4 ORDER BY avg_rating DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["Category"] . " | " . $row["spots"] . " | " . $row["avg_rating"] .
         " | " . $row["visitors"] . "<br>";
}

echo "<h3>4. Estimated yearly revenue by region</h3>";
$res = $conn->query("SELECT Region, SUM(EntryFee * VisitorsPerYear) AS revenue
                     FROM tourist_spot GROUP BY Region
                     HAVING SUM(EntryFee * VisitorsPerYear) > 1000000
                     ORDER BY revenue DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["Region"] . " | " . number_format($row["revenue"], 2) . "<br>";
}
$conn->close();
?>
