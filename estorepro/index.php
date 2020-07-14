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
        <title>E-store</title>
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
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 1</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/mbl1.png" alt="Responsive image"></center>
                                <p>4.2' Screen,snap-dragon processor ,1GB RAM,4GB internal memory. <b>Rs 5000</b></p>
                                <a href="login.php"><button class="btn btn-primary" style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 2</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/keypad1.png" alt="Responsive image"></center>
                                <p>Numeric keypad, 2MP Camera,Internet browsing. <b>Rs 4000</b></p>
                                <a href="login.php"><button class="btn btn-primary"style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 3</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/mbl3.png" alt="Responsive image"></center>
                                <p>4' Screen,snap-dragon processor,Android 3.2 1GB RAM,4GB internal memory. <b>Rs 4000</b></p>
                                <a href="login.php"><button class="btn btn-primary" style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 4</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/mbl4.png" alt="Responsive image"></center>
                                <p>4' Screen,snap-dragon processor,1GB RAM,4GB internal memory. <b>Rs 5500</b></p>
                                <a href="login.php"><button class="btn btn-primary"style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 5</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/keypad2.png" alt="Responsive image"></center>
                                <p>Numeric Keypad,8MP camera,Internet browsing. <b>Rs 5000</b></p>
                                <a href="login.php"><button class="btn btn-primary" style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="panel panel-default" >
                        <div class="panel-heading">
                            <h4>Mobile 6</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="login.php" method="POST">
                                <center><img src="img/mbl6.png" alt="Responsive image"></center>
                                <p>4.2' Screen,snap-dragon processor ,1GB RAM,4GB internal memory. <b>Rs 5000</b></p>
                                <a href="login.php"><button class="btn btn-primary" style="width: 290px">Order Now!</button></a><br><br>
                            </form>
                        </div>
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
