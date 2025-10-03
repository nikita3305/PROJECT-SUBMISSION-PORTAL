<?php
$conn = new mysqli("localhost", "root", "", "submission_portal");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Upload Status</title>
  <style>
    body {
      background-color: lightgoldenrodyellow;
    }
  </style>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="upload-status">
    <?php
    if (isset($_POST['student_name']) && isset($_FILES['project_file'])) {
        $name = $_POST['student_name'];
        $file = $_FILES['project_file']['name'];
        $tmp = $_FILES['project_file']['tmp_name'];
        $target = "uploads/" . basename($file);

        if (move_uploaded_file($tmp, $target)) {
            $conn->query("INSERT INTO submissions (student_name, file_path) VALUES ('$name', '$file')");
           echo "<h2 style='text-align :center; background-color : lightskyblue;'>Project submitted successfully!</h2>";

        } else {
            echo "<h2 style='color: red;'>Error uploading the file.</h2>";
        }
    }
    ?>
    <a href="index.php" style='text-align :center;'>Go Back</a>
  </div>
</body>
</html>
