<!DOCTYPE html>
<html>
<head>
    <title>Feedback Page</title>
    <style>
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Feedback Form</h2>
        <?php
        $server="localhost";
        $username="root";
        $password="";
        $dbn="proproduct";
        
        $con = mysqli_connect($server,$username,$password,$dbn);
    

        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $rating=$_POST["rating"];
            
     $sql = "INSERT INTO feedback (Name,email,message,rating) VALUES('$name', '$email', '$message','$rating')";
     $run= mysqli_query($con,$sql);

            
            
            
            echo "<p>Thank you for your feedback!</p>";
            header("Location: pay.html"); 
        }
        ?>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="text" name="email" required>

            <label for="message">Message:</label>
            <textarea name="message" required></textarea>
        <label for="rating">Rating:</label>
        <select name="rating">
            <option>*</option>
            <option>**</option>
            <option>***</option>
            <option>****</option>
            <option>*****</option>
        </select>

            <input type="submit" value="Submit Feedback">
        </form>
    </div>
</body>
</html>
