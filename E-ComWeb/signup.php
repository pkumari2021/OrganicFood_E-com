<?php
    require 'include/config.php';
    session_start();
    if(isset($_SESSION['email'])){
       
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Organic food ecommers website</title>
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
	<center>
        <div style="background-image:url(images/fruits-background.jpg); width:100%; 
					height:100%;background-attachment:fixed; background-repeat: no-repeat;  
					background-size: cover; background-size: 100% 100%;"> 
            <?php
                require 'include/header.php';
            ?>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
					 <div class="panel panel-primary">
                            <div class="panel-heading">
                             <h2><b>SIGN UP</b></h2>
							</div>
						<div class="panel-body">
                           <form method="post" action="user_registration_script.php" >
					
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" 
								required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
							
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" 
								placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
							
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
							
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
							
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
							
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
							
                           </form>
						</div>
					  </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                <marquee>
				<h4 Style="color:white">&copy;
						Copyright  &nbsp;&nbsp;&nbsp;
						All Rights Reserved &nbsp;&nbsp;&nbsp;
						Name:Prabodha Kumari &nbsp;&nbsp;&nbsp;
						Index No:IT2018014</h4>
					</marquee>
               </center>
               </div>
           </footer>

        </div>
		</center>
    </body>
</html>
