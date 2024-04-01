<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $task = $_POST["task"];
  // Save the task to a file or database
  // For simplicity, let's assume appending to a text file
  $file = fopen("tasks.txt", "a");
  fwrite($file, $task . "\n");
  fclose($file);
}
header("Location: index.php"); // Redirect back to homepage
?>
