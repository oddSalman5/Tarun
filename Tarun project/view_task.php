<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Tasks</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('background.jpg'); /* Background image */
      background-size: cover;
    }

    nav {
      background-color: #333;
      color: #fff;
      padding: 10px 0;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 10px;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 0 20px;
      background-color: rgba(255, 255, 255, 0.7); /* Transparent white background */
      border-radius: 10px;
    }

    .task-list {
      list-style: none;
      padding: 0;
    }

    .task-list li {
      margin-bottom: 10px;
    }

    .buttons button {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="view_tasks.php">View Tasks</a></li>
    </ul>
  </nav>
  
  <div class="container">
    <h1>View Tasks</h1>
    <ul class="task-list">
      <?php
      $tasks = file("tasks.txt", FILE_IGNORE_NEW_LINES);
      foreach ($tasks as $task) {
        echo "<li>$task <div class='buttons'><button>Edit</button><button>Delete</button></div></li>";
      }
      ?>
    </ul>
  </div>
</body>
</html>
