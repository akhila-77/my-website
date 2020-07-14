<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce", "3308") or die(mysqli_error($con));
if(isset($_POST['submit'])){
$email =filter_input(INPUT_POST,'email');
$name = filter_input(INPUT_POST,'name');
$password = filter_input(INPUT_POST,'password');
$contact =filter_input(INPUT_POST,'contact');
$city = filter_input(INPUT_POST,'city');
$address =filter_input(INPUT_POST,'address');
$sql="SELECT email FROM users WHERE email='$email'";
$result= mysqli_query($con,$sql) or die(mysqli_error());
if(mysqli_num_rows($result)>0){
    echo "<script>alert('the email you have entered is already present please enter the correct email address')</script>";
}
else{
$user_registration_query ="INSERT INTO users (email,name,password,contact,city,address) values ('$email','$name', '$password', '$contact', '$city', '$address')";
$user_registration_submit=mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con));
echo "<script>alert('user succesfully inserted ,now you can login to E-store')</script>";
}
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type ="text/css" href="style.css"/>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: whitesmoke">
           <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>   
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                        <li><a href="AboutUs.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>
                        <li><a href="Contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
                        
                    </ul>
        </div>
      </div>
        </nav>
        <div class="container">
            <div class="container-fluid decor_bg" id="index-body">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="img/sign.png" alt="responsive_image">
                    </div>
                <div class="col-sm-4">
                    <div class="panel-heading">
                        <h3>SIGN UP</h3>
                    </div>
                    <div class="panel-body">
                        <form action="signup.php" method="post">
                            
                            <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="true"><br>
                            
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="true"><br>
                            <input type="number" id="contact" class="form-control" name="contact" placeholder="Contact" required="true"><br>
                            <input type="text" id="city" class="form-control" name="city" placeholder="City" required="true"><br>
                            <input type="text" id="address" class="form-control" name="address" placeholder="Address" required="true"><br>
                            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
                            
                            </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <footer style="position: fixed">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <h4 style="color: whitesmoke">Information</h4>
                        <ul class="list-unstyled">
                             <li><a href="AboutUs.php" style="color: whitesmoke">About Us</a></li>
                             <li><a href="Contact.php" style="color: whitesmoke">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mx-auto">
                        <h4 style="color: whitesmoke">My Account</h4>
                        <ul class="list-unstyled">
                            <li><a href="login.php" style="color: whitesmoke">Login</a></li>
                             <li><a href="signup.php" style="color: whitesmoke">Sign Up</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mx-auto" style="color: whitesmoke">
                        <h4>Contact Us</h4>
                        <p>Contact: +91-123-000000</p>
                    </div>
                </div>
            </div>
        </footer>   
    </body>
</html>



       