<?php
$conn = new mysqli("localhost", "root", "", "company");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Task 3 sample says 24000 / original total 86800 = 27.65%.
// Therefore, show percentages before changing the salaries.
$res = $conn->query("SELECT SUM(SALARY) AS total_salary FROM employee");
$row = $res->fetch_assoc();
$total = $row["total_salary"];

echo "<h3>Salary Percentage (original salaries)</h3>";
$res = $conn->query("SELECT EMAIL, SALARY FROM employee");
echo "<table border='1'><tr><th>EMAIL</th><th>PERCENTAGE</th></tr>";
while ($row = $res->fetch_assoc()) {
    $percent = $row["SALARY"] / $total * 100;
    echo "<tr><td>" . $row["EMAIL"] . "</td><td>" . number_format($percent, 2) . "%</td></tr>";
}
echo "</table>";

// Task 2: most recent gets 17.5%; most senior gets 21.5%.
$conn->query("UPDATE employee SET SALARY = SALARY * 1.175 ORDER BY HIRE_DATE DESC LIMIT 1");
$conn->query("UPDATE employee SET SALARY = SALARY * 1.215 ORDER BY HIRE_DATE ASC LIMIT 1");

// Task 4: one CASE statement prevents a row from being updated twice.
$conn->query("UPDATE employee
              SET SALARY = CASE WHEN SALARY > 10000 THEN SALARY * 0.90
                                ELSE SALARY * 1.10 END");

echo "<p>Salary updates completed.</p>";
$conn->close();
?>
