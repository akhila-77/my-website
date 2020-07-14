<?php
$con= mysqli_connect("localhost","root","","ecommerce","3308") or die(mysqli_error($con));
if($_POST)
{
$email =filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'password');
$new_password= filter_input(INPUT_POST,'new_password');
$re_type_new_password= filter_input(INPUT_POST,'re_type_new_password');
$query="SELECT password FROM users WHERE email='$email'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
$data= mysqli_fetch_row($result);
if($data[0]==$password)
{
    if($new_password!=$re_type_new_password)
    {
        echo "<script>alert('both the passwords dosnot match')</script>";
    }
    if($new_password==$re_type_new_password)
    {
        $sql= mysqli_query($con,"UPDATE users SET password='$new_password' WHERE email='$email'") or die(mysqli_error());
    }
    if($sql)
    {
        echo "<script>alert('Congratulations You have successfully changed your password')</script>";
        
    }
}
else{
    echo "<script>alert('user password is incorrect')</script>";
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
        <title>Settings</title>
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
                    <a class="navbar-brand" href="home.php">E-Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar"> 
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>setting</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>logout</a></li>
                        
                        
                    </ul>
        </div>
      </div>
    </nav>
        <div class="container">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="panel-heading">
                            <h4>Change Password</h4>
                        </div>
                        <div class="panel-body">
                            
                            <form role="form" action="settings.php" method="POST">
                                <input type="email" id="email" class="form-control" name="email" placeholder="user-email" required><br>
                                <input type="password" id="old password" class="form-control" name="password" placeholder="Old Password" required><br>
                                <input type="password" id="new password" class="form-control" name="new_password" placeholder="New Password" required><br>
                                <input type="password" id="re-type new password" class="form-control" name="re_type_new_password" placeholder="Re-type New Password" required><br>
                                
                                 <button type="submit" name="submit">Submit</button>
                            </form>
                            <a href="settings.php">Forget Password?</a>
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
