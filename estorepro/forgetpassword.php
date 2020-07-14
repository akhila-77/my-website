<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce", "3308") or die(mysqli_error($con));

    $email= filter_input(INPUT_POST,'email');
    $sql="SELECT email FROM users WHERE email='$email'";
    $query= mysqli_query($con, $sql) or die(mysqli_error());
    
    if(mysqli_num_rows($query)==1){
        header("Location: passchange.php");
    }
    else{
        echo "<script>alert('the eamil address you have entered is wrong'')</script>";
    }

?>
<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>settings</title>
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
             <div class="container-fluid decor_bg" id="forget">
               <div class="inner-banner-image">
            <center>
                <div class="banner-content">
                    <h4>please enter your email address</h4>
            <form role="form" action="forgetpassword.php" method="post">
                <input type="email" id="Email" name="email" placeholder="email address" required="true">
                <input type="submit" value="submit" id="sub">
            </form>
                </div>
            </center>
               </div>
             </div>
        </div>
    </body>
</html>

