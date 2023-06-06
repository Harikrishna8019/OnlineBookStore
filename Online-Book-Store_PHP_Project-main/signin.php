<?php
$server="localhost";
$username="root";
$password="";
$dbn="proproduct";
session_start();
$con = mysqli_connect($server,$username,$password,$dbn);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login_submit"]))
 {
    $signup_username = $_POST['signup_username'];
    $signup_password = $_POST['signup_password']; 
    $sql = "SELECT * FROM Logindetails WHERE username = '$signup_username' AND  password = '$signup_password'";
    $result = mysqli_query($con, $sql);
      
    $count = mysqli_num_rows($result);


    if ($count ==1 ) 
    {
     $_SESSION['signup_username'] = $signup_username;
    $_SESSION['signup_password'] = $signup_password;
        echo 'Login successful.';
        header("Location: products.php"); 
   } 
   else 
   {
   echo "Your Login Name or Password is invalid";
  }
}?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup and Login</title>
    <style>
        body {
        
            background-color:cyan;
            font-family: Arial, sans-serif;

            
            margin: 0;
            padding: 0;
        }

        .container {
          
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        
        }
        .form{
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="password"],
        input[type="phone"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="button"]
        {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        p.error {
            color: red;
            margin-top: 10px;
        }

        p.success {
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class ="form"> 
            
            <h2>Login</h2>
                  
                <form  method="post">
                <label for="signup_username">username:</label>
                <input type="text" name="signup_username" required><br><br>
                <label for="signup_password">password:</label>
                <input type="password" name="signup_password" required><br><br>
                <input type="submit" name="login_submit" value="Login">
                <a href="admin.php" class="btn"> <input type="button" value="Admin"></a><br><br>
               <a href="signup.php" class="btn" >  <input type="button" value="new user"></a>
            </form>
        </div>
    </div>
</body>

</html>

