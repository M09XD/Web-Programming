<?php
$conn = new mysqli("localhost", "root", "", "uiutech_final");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>1. Employees per performance rating</h3>";
$res = $conn->query("SELECT PerformanceRating, COUNT(*) AS total
                     FROM employee_final GROUP BY PerformanceRating");
while ($row = $res->fetch_assoc()) {
    echo $row["PerformanceRating"] . ": " . $row["total"] . "<br>";
}

$conn->query("UPDATE employee_final SET PerformanceRating='C'
              WHERE Salary < 40000 AND PerformanceRating <> 'D'");
$conn->query("UPDATE employee_final SET Salary = Salary + 5000
              WHERE Salary > 50000 AND Salary + 5000 <= 60000");
echo "<p>2. Performance ratings updated where required.</p>";
echo "<p>3. Salary bonuses updated where the new salary does not exceed 60000.</p>";

echo "<h3>4. Employees per department</h3>";
$res = $conn->query("SELECT DepartmentName, COUNT(*) AS total
                     FROM employee_final GROUP BY DepartmentName ORDER BY total DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["DepartmentName"] . ": " . $row["total"] . "<br>";
}
$conn->close();
?>
