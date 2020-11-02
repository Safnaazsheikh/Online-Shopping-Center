<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }?>
<!DOCTYPE html>
<head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Online Shopping Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
<body>
	<div>
            <?php 
               require 'header.php';
            ?>
            <br>

</div>
<div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>Delivery Address</b></h1>
                        <form action="confirmed.php" method="POST">
                            <div class="form-group">
                                <textarea  name="addr" class="form-control" placeholder="Enter address" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="text" name="pin" class="form-control" placeholder="Enter Pincode" required>
                            </div> 
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                            </div>
                            <div class="form-group">
                                <select name="state" class="form-control">
                                <option value="SelectState">Select State</option>  
                                <option value="Andaman&Nicobar">Andaman&Nicobar</option>
                                <option value="Assam">Assam</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kashmir">Kashmir</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="NewDelhi">NewDelhi</option>
                                <option value="Rajasthan">Rajasthan</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
<!-- <center>
	<h1> Cash On Delivery Service!</h1>
  <h2> We deliver accross India...from Kashmir to Kanyakumari!</h2>
  <p>Enter address</p> -->
  <!-- <form action="purchase.php" method="POST">
<textarea  name="addr" class="form-control" placeholder="Enter address" required="required"></textarea>
<p>Enter pincode</p>
<input type="text" name="pin" class="form-control" required>
<p>Enter city</p>
<input type="text" name="city" class="form-control" required>
<p>Select your state</p>
  <select name="state" style="width:300px;height: 50px;font-size: 20px;">
  <option value="SelectState">Select State</option>  
  <option value="Andaman&Nicobar">Andaman&Nicobar</option>
  <option value="Assam">Assam</option>
  <option value="Gujarat">Gujarat</option>
  <option value="Karnataka">Karnataka</option>
  <option value="Kashmir">Kashmir</option>
  <option value="Kerala">Kerala</option>
  <option value="Maharashtra">Maharashtra</option>
  <option value="NewDelhi">NewDelhi</option>
  <option value="Rajasthan">Rajasthan</option>
</select><br>
    <input type="submit" name="submit" value="Submit" >
</form> -->

</body>
</html>