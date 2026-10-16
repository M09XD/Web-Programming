<?php
$conn = new mysqli("localhost", "root", "", "retail");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Task 1: total quantity and total revenue for each product.
echo "<h3>1. Product totals</h3>";
$res = $conn->query("SELECT product_id, SUM(quantity_sold) AS qty, SUM(total_price) AS revenue
                     FROM sales GROUP BY product_id");
while ($row = $res->fetch_assoc()) {
    echo $row["product_id"] . " | Quantity: " . $row["qty"] . " | Revenue: " . $row["revenue"] . "<br>";
}

// Task 2: two days with the highest revenue in January 2024.
echo "<h3>2. Top two days</h3>";
$res = $conn->query("SELECT sale_date, SUM(total_price) AS revenue
                     FROM sales
                     WHERE sale_date BETWEEN '2024-01-01' AND '2024-01-31'
                     GROUP BY sale_date ORDER BY revenue DESC LIMIT 2");
while ($row = $res->fetch_assoc()) {
    echo $row["sale_date"] . " | " . $row["revenue"] . "<br>";
}

// Task 3: average quantity only where sales took place on 2+ distinct days.
echo "<h3>3. Average quantity</h3>";
$res = $conn->query("SELECT product_id, AVG(quantity_sold) AS avg_qty
                     FROM sales
                     WHERE sale_date BETWEEN '2024-01-01' AND '2024-01-31'
                     GROUP BY product_id
                     HAVING COUNT(DISTINCT sale_date) >= 2");
while ($row = $res->fetch_assoc()) {
    echo $row["product_id"] . " | " . $row["avg_qty"] . "<br>";
}
$conn->close();
?>
