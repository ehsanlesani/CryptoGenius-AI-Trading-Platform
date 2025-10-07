<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // نمونه ساده برای تست
  if ($username === "admin" && $password === "1234") {
    echo "Login successful!";
  } else {
    echo "Invalid credentials.";
  }
}
?>
