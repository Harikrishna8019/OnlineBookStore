<!DOCTYPE html>
<html>
<head>
    <title>Online Bookstore - Donations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .success {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Online Bookstore - Donations</h1>
    <?php
    
    if (isset($_POST['submit'])) {
        
        $amount = $_POST['amount'];

        
        echo '<div class="success">Thank you for your donation of Rs' . $amount . '!</div>';
    
    
    }
    ?>
    <form method="POST" action="">

    
<label for="amount">Donation Amount (INR):</label>
<input type="number" name="amount" id="amount" min="100" step="100" required>
        <input type="submit" name="submit" value="Donate">
    </form>
</body>
</html>
