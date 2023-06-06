<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
  // User is logged in, display logout content
  echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Logout</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
        }
        
        .container {
          max-width: 400px;
          margin: 0 auto;
          padding: 40px;
          background-color: #fff;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          text-align: center;
        }
        
        h2 {
          color: #333;
          font-size: 24px;
          margin-bottom: 20px;
        }
        
        .btn {
          display: inline-block;
          padding: 10px 20px;
          background-color: #4caf50;
          color: #fff;
          text-decoration: none;
          border-radius: 3px;
          transition: background-color 0.3s;
        }
        
        .btn:hover {
          background-color: #45a049;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <h2>Logout</h2>
        <p>Are you sure you want to logout?</p>
        <a href="" class="btn">Logout</a>
      </div>
    </body>
    </html>
  ';
} else {
  // User is not logged in, redirect to the login page
  header("Location: m1.php");
  exit();
}
?>
