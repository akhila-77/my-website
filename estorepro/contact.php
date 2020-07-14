<?php
$con= mysqli_connect("localhost", "root", "", "ecommerce", "3308") or die(mysqli_error($con));
if(isset($_POST['submit']))
{
    $name= filter_input(INPUT_POST,'name');
    $email= filter_input(INPUT_POST,'email');
    $message=filter_input(INPUT_POST,'message');
    $sql="INSERT INTO contact (name,email,message) values ('$name','$email','$message')";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    echo "<script>alert('we have recieved your message. we will solve your problem soon..thank you')</script>"; 
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
        <title>Contact Us</title>
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
                    <div class="col-sm-9">
                            <div class="panel-heading">
                                <h4>LIVE SUPPORT</h4>
                            </div>
                            <div class="panel-body">
                                 <p><h5>24 hours|7 days a week|365 days a year Live Technical support</h5></p><br>
                            <p>it is a long established fact that a reader will be distracted by the readable contents
                            of a page when looking at this layout.The point of using loream lpsum is that it has a more
                            -or-less normal distribution of letters.There are many variations of passages of lorem lpsum
                             available,but the majority have suffered alteration in some form,by injected humour,ot randomised words which dont't look even slightly believable.
                             If you are going to use a passage on Lorem l[sum,you need to be sure there isn't anything embrrassing 
                             hidden in the middle of text</p>
                            </div>
                        </div>
                    <div class="col-sm-3">
                        <img src="img/contact.png" alt="responsive_image">
                    </div>
                    </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="panel-heading">
                            <h4>CONTACT US</h4>
                        </div>
                        <div class="panel-body">
                            <h5>Name:</h5>
                            <form role="form" action="contact.php" method="POST">
                                <input type="text" id="Name" class="form-control" name="name" required><br>
                                <h5>Email:</h5>
                                <input type="email" id="Email" class="form-control" name="email" required><br>
                                <h5>Message:</h5>
                                <textarea type="text" maxlength="2000" id="Message" class="form-control" name="message"></textarea><br>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button><br><br>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <h3>COMPANY INFORMATION:</h3>
                            <h6>500 Lorem ipsum dolor Sit</h6>
                            <h6>22-56-2-9 Sit Amet,Lorem,USA</h6>
                            <h6>Phone:(00) 222 666 444</h6>
                            <h6>Fax:(000) 000 00 00 0</h6>
                            <h6>Email:info@mycompany.com</h6>
                            <h6>Follow on:Facebook,Twitter</h6>
                    </div>
                </div>
                </div>             
            </div>
        </div>
        <footer>
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

      
                            