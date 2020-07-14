
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
        <title>Cart</title>
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
                       
                        <li><a href="cart.php"><span class="glyphicon glyphicon-user"></span>cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-log-in"></span>setting</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-tasks"></span>logout</a></li>
                  
                    </ul>
        </div>
      </div>
    </nav>
        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-md-7">
                    
                    <table style="margin-top: 10%"id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width: 40%">item number</th>
                            <th style="width: 30%">price</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr id="1st">
                                <td>1</td>
                                <td>5000</td>
                              
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>4000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>5500</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                
                                <td>Total:</td>
                                <td><a href="success.php"><button type="submit" name="payment">checkout</button></a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>  
    </body>
</html>