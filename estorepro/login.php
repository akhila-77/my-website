<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce", "3308") or die(mysqli_error($con));
if($_POST)
{
$email = filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');
$sql="SELECT email,password FROM users WHERE email='$email' AND password='$password'";
$result= mysqli_query($con,$sql);
$num= mysqli_num_rows($result);
if($num==1)
{
    echo "<script>alert('you have succesfully logged in')</script>";
    header("Location: home.php"); 
}
else
{
    echo "<script>alert('wrong email or password')</script>";
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
        <title>login to e-store</title>
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
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p>Don't have an account?<a href="signup.php">Register</a></p>
                            <form role="form" action="login.php" method="post" enctype="multipart/form-data">
                                
                                <input type="email" class="form-control" name="email" placeholder="email" 
                                       required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                                
                                <input type="password" class="form-control" name="password" placeholder="password" required pattern="[a-z0-9._@+-%]"><br>
                                
                                <button type="submit" name="submit">Submit</button>
                            </form>
                            <a href="forgetpassword.php">Forget Password?</a>
                        </div>
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

