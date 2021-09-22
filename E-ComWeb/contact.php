
<?php 
    $result = "";
    $error  = "";
if(isset($_POST['submit']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "prabodhakumari2017@gmail.com"; // Your mail
    $mail->Password = '975281884'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('prabodhakumari2017@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
        $error = "Something went worng. Please try again.";
    }
    else 
    {
        $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Organic food ecommer website </title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<!-- jquery library -->
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified javascript -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

 
 <link rel="stylesheet" href="css/styles2.css" type="text/css">

</head>

<body>
 <div style="background-image:url(images/homeBgPic.jpg); width:100%; 
					height:100%;background-attachment:fixed; background-repeat: no-repeat;  
					background-size: cover; background-size: 100% 100%;"/>
            
<?php  require_once('include/header.php');?>
		
			
		
	    

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-auto">
                <div class="contact-form">
                    <h1>Contact Form SendMail</h1>
                    <h2 class="text-center text-white"> <?=$result; ?></h2>
                    <h2 class="text-center text-danger"> <?=$error; ?></h2>
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Full name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email" required>
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" id="Subject"​ name="subject" placeholder="Enter Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="Message" name="message" rows="5" placeholder="Enter Message..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<button type="Reset" name="reset" style="background-color:green" class="btn btn-primary">Clear the Form</button>
                    </div>            
                </form>
            </div>
        </div>
    </div>
	
	 <marquee>
				<h4 Style="color:white">&copy;
						Copyright  &nbsp;&nbsp;&nbsp;
						All Rights Reserved &nbsp;&nbsp;&nbsp;
						Name:Prabodha Kumari &nbsp;&nbsp;&nbsp;
						Index No:IT2018014</h4>
					</marquee>
</div>


</body>
</html>                            