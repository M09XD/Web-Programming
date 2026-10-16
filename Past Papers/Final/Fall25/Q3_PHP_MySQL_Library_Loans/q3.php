<?php
$conn = new mysqli("localhost", "root", "", "campus_library");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>1. Status counts (only counts above 1)</h3>";
$res = $conn->query("SELECT Status, COUNT(*) AS total FROM book_loans
                     GROUP BY Status HAVING COUNT(*) > 1");
while ($row = $res->fetch_assoc()) {
    echo $row["Status"] . ": " . $row["total"] . "<br>";
}

$conn->query("UPDATE book_loans SET Status='Grace Period', PenaltyFee=0
              WHERE Status='Overdue' AND DaysOverdue < 7");
$conn->query("UPDATE book_loans SET PenaltyFee = PenaltyFee * 1.10
              WHERE PenaltyFee > 20 AND PenaltyFee * 1.10 <= 50");
echo "<p>2. Grace-period updates completed.</p>";
echo "<p>3. Processing charges completed where the new fee is at most 50.</p>";

echo "<h3>4. Total penalty by book</h3>";
$res = $conn->query("SELECT BookTitle, SUM(PenaltyFee) AS total
                     FROM book_loans GROUP BY BookTitle ORDER BY total DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["BookTitle"] . ": " . number_format($row["total"], 2) . "<br>";
}
$conn->close();
?>
