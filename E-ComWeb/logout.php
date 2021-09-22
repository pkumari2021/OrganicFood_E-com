<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        
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
	
    <body style="background-image:url(images/BgPic4.jpg); width:100%; 
					height:100%;background-attachment:fixed; background-repeat: no-repeat;  
					background-size: cover; background-size: 100% 100%;">
        <div>
            <?php
                require 'include/header.php';
            ?>
            <br><br><br> <center>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> </center>
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
    </body>
</html>
