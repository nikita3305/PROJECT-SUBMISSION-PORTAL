<!DOCTYPE html>
<html>
<head>
  <title>Submitted Projects</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #d4fc79 0%, #96e6a1 100%);
      margin: 0;
      padding: 60px;
      text-align: center;
      color: #2c2c2c;
    }

    .container {
      max-width: 900px;
      margin: auto;
      background: linear-gradient(145deg, #e0f7fa, #ffffff);
      padding: 50px;
      border-radius: 20px;
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
      animation: floatIn 0.8s ease-out;
    }

    h2 {
      font-size: 36px;
      color: #6a1b9a;
      margin-bottom: 30px;
      font-weight: bold;
    }

    .project-entry {
      background: #f9fcff;
      border-left: 5px solid #3498db;
      padding: 18px 24px;
      margin-bottom: 18px;
      border-radius: 12px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease, background 0.3s ease;
    }

    .project-entry:hover {
      transform: scale(1.02);
      background: #eef6fb;
    }

    .student-name {
      font-weight: bold;
      font-size: 18px;
      color: #2c3e50;
    }

    .download-link {
      display: inline-block;
      margin-left: 15px;
      padding: 10px 20px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .download-link:hover {
      background: linear-gradient(to right, #0072ff, #0049b7);
      transform: scale(1.05);
    }

    @keyframes floatIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    $conn = new mysqli("localhost", "root", "", "submission_portal");
    $result = $conn->query("SELECT * FROM submissions");

    echo "<h2>📚 Submitted Projects</h2>";
    while ($row = $result->fetch_assoc()) {
      echo "<div class='project-entry'>";
      echo "<span class='student-name'>{$row['student_name']}</span>";
      echo "<a class='download-link' href='download.php?file={$row['file_path']}'>⬇️ Download</a>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>
