<?php
$conn = new mysqli("localhost", "root", "", "sundarban");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>1. Revenue per category (before updates)</h3>";
$res = $conn->query("SELECT CategoryName, SUM(Revenue) AS total
                     FROM sales_data GROUP BY CategoryName");
while ($row = $res->fetch_assoc()) {
    echo $row["CategoryName"] . ": " . $row["total"] . "<br>";
}

$conn->query("UPDATE sales_data SET CategoryName='Low Performing' WHERE Revenue < 40000");
$conn->query("UPDATE sales_data SET Revenue = Revenue * 1.10 WHERE Revenue > 70000");
echo "<p>2. Category updates completed.</p>";
echo "<p>3. Revenue bonuses completed.</p>";

// Read the average revenue for each category after Tasks 2 and 3.
$averages = array();
$res = $conn->query("SELECT CategoryName, AVG(Revenue) AS avg_revenue
                     FROM sales_data GROUP BY CategoryName");
while ($row = $res->fetch_assoc()) {
    $averages[$row["CategoryName"]] = $row["avg_revenue"];
}

echo "<h3>4. Seller label</h3>";
$res = $conn->query("SELECT ProductName, CategoryName, Revenue FROM sales_data");
while ($row = $res->fetch_assoc()) {
    if ($row["Revenue"] > $averages[$row["CategoryName"]]) {
        $label = "Top Seller";
    } else {
        $label = "Regular Seller";
    }
    echo $row["ProductName"] . " | " . $row["CategoryName"] . " | " . $label . "<br>";
}
$conn->close();
?>
