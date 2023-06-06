
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title>Personal Details</title>
 </head>
<style type="text/css">
  body{
    
    font-family: arial;
    text-align: left;
    background-color: aquamarine;

  }
  h1{
    text-align: center;
  }
 
  input[type=text]:focus {
  border: 3px solid #555;
}
div.container {
  border-radius: 5px;
  padding: 20px;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 180px;
}
a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
  
</style>

<body>


  <img src="h9.avif" alt="logo">
  <div class="container">
  <h1>Welcome to ShopMyBook store</h1>
  <hr>


  </div>
  <h1>Enter Personal Details</h1>
  
  <div class="container">
  <form action="m2.php" method="POST"> 
    
    Name:<input type="text" name="name" placeholder="Enter name.." /><br><br>
  
    Email address:<input type="text" name="email" placeholder="Enter Email Address.." /><br><br>
    Full Residential Address:<textarea type="text" name="address" rows="2" cols="40" placeholder="Enter Address.."></textarea><br><br>
    Phone Number:<input type="Number" name="phone no" placeholder="Enter phone number.." /><br><br>
    Pin code:<input type="text" name="code" placeholder="Enter pin code.." /><br><br>
    Select Payment Mode:<input type="radio" name="mode" value="cash">Cash On Delivery
    <input type="radio" name="mode" value="online">Online<br><br>
    Select State:<select name="sel">
      <option>Select state</option>
      <option>Maharashtra</option>
      <option>Goa</option>
      <option>Karnataka</option>
      <option>Andhra Pradesh</option>
      <option>Tamil Nadu</option>
      <option>Punjab</option>
      <option>Delhi</option>
      <option>Rajasthan</option>
      <option>West Bengal</option>
    </select><br><br>
    <a href="confirm.html"  class="confirm order">Place Order</a>
  </form>
</div>
</body>
</html>
     