<?php
$conn = new mysqli("localhost", "root", "", "uiuweb_final");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>1. Students per letter grade</h3>";
$res = $conn->query("SELECT LetterGrade, COUNT(*) AS total FROM student_final GROUP BY LetterGrade");
while ($row = $res->fetch_assoc()) {
    echo $row["LetterGrade"] . ": " . $row["total"] . "<br>";
}

$conn->query("UPDATE student_final SET LetterGrade='C' WHERE Grade < 75 AND LetterGrade <> 'D'");
$conn->query("UPDATE student_final SET Grade = Grade + 5 WHERE Grade > 80 AND Grade + 5 <= 90");
echo "<p>2. Letter grades updated where required.</p>";
echo "<p>3. Bonus marks updated where the final grade does not exceed 90.</p>";

echo "<h3>4. Students per course</h3>";
$res = $conn->query("SELECT CourseTitle, COUNT(*) AS total FROM student_final
                     GROUP BY CourseTitle ORDER BY total DESC");
while ($row = $res->fetch_assoc()) {
    echo $row["CourseTitle"] . ": " . $row["total"] . "<br>";
}
$conn->close();
?>
