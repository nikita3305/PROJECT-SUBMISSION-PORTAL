<!DOCTYPE html>
<html>
<head>
  <title>Project Upload</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>🚀 Submit Your Amazing Project</h2>

  <div class="form-container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="text" name="student_name" placeholder="Your Full Name" required><br>
      <input type="file" name="project_file" required><br>
      <button type="submit">📤 Upload Project</button>
    </form>

    <!-- Review Button placed just below the form -->
    <a href="review.php" class="review-button">📄 View Submitted Projects</a>
  </div>
</body>
</html>
