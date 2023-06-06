<?php
$server="localhost";
$username="root";
$password="";
$dbn="proproduct";
session_start();
$con = mysqli_connect($server,$username,$password,$dbn);



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["payment_submit"])) {
    $payment_amount = $_POST["payment_amount"];
    $payment_currency = $_POST["payment_currency"];
    $payment_cardNumber = $_POST["payment_cardNumber"];
    $payment_expiryMonth = $_POST["payment_expiryMonth"];
    $payment_expiryYear = $_POST["payment_expiryYear"];
    $payment_cvv= $_POST["payment_cvv"];
    $sql = "INSERT into paymentdetails(amount,currency,cardNumber,expiryMonth,expiryYear,cvv) values('$payment_amount', '$payment_currency','$payment_cardNumber','$payment_expiryMonth','$payment_expiryYear','$payment_cvv')";
    $run= mysqli_query($con,$sql);
    $paymentSuccessful = true; 
    if ($paymentSuccessful) {
        
        echo "Payment successful!";
        header("Location: pay.html"); 
    } else {
       
        echo "Payment failed. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: turquoise;
            margin: 0;
            padding: 0;
        }

        h2 {
            margin-top: 30px;
            text-align: center;        }

        form {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            margin-top: 20px;
            box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"]
         {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
</style>
<script type="text/javascript">
    function pay(){
       window.location.href="pay.html";
    }
</script>
<body>
    <h2>Payment Page</h2>
    
    <form method="post" action="">
        <label for="payment_amount">Amount:</label>
        <input type="text" name="payment_amount" id="amount" required><br>
        <label for="payment_currency">Currency:</label>
        <input type="text" name="payment_currency" id="currency" required><br>
        <label for="payment_cardNumber">Card Number:</label>
        <input type="text" name="payment_cardNumber" id="cardNumber" required><br>
        <label for="payment_expiryMonth">Expiry Month:</label>
        <input type="text" name="payment_expiryMonth" id="expiryMonth" required><br>
        <label for="payment_expiryYear">Expiry Year:</label>
        <input type="text" name="payment_expiryYear" id="expiryYear" required><br> 
        <label for="payment_cvv">CVV:</label>
        <input type="text" name="payment_cvv" id="cvv" required><br>
        <input type="submit" name=" payment_submit" value="Pay" onclick="pay()" >
    </form>
</body>
</html>
