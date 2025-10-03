<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'admin' && $password === 'admin123') {
    $result = $conn->query("SELECT * FROM feedback");
    echo "<h2>All Feedback</h2>";
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['student_name'] . "</strong> on <em>" . $row['faculty_name'] . "</em>: " . $row['feedback'] . "</p><hr>";
    }
} else {
    echo "Invalid login";
}
?>