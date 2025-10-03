<?php
include 'db.php';

$student_name = $_POST['student_name'];
$faculty_name = $_POST['faculty_name'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (student_name, faculty_name, feedback) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $student_name, $faculty_name, $feedback);
$stmt->execute();

echo "Feedback submitted successfully.";
?>