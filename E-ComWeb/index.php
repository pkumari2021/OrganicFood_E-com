<!DOCTYPE html>
<html>
<head>
      
	<title>Organic food ecommers website </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>

<body>
	<div class="wrapper">
		<?php  include('include/header.php');?>
      
	    <header class="clearfix">
		
		<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/BgPic3.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/BgPic4.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/headerpic2.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/BgPic12.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/BgPic10.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/BgPic8.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/BgPic9.jpg" style = "width:100%; height:450px;" />
			</div>
			
			
		</div><!--"myCarousel-->
		
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<script src = "bootstrap/js/jquery.js"></script>
	<script src = "bootstrap/js/bootstrap.js"></script>
	
		
	    </header><!--header-->
		
		
		<br>
		    <center>
		   <div class="home-table clearfix">
		    <a href="fruit_store.php"> <img src="images/fruits.jpg"> </a> &emsp; &emsp; &emsp; &emsp;
		    <a href="vegitabel_store.php"> <img src="images/vegitabel.jpg"> </a>
	        
			</div><!--home-table clearfix-->
		   </center>
		   
		    
		            <table style="background-image:url(images/homeBgPic.jpg); width:100%; 
					height:400px;background-attachment:fixed; background-repeat: no-repeat;  
					background-size: cover; background-size: 100% 100%;">
					
					  
						<td><strong><h2>OUR VISSION</h2></strong></td>
						<td><h3>"To be a trustworthy and innovative global leader in providing genuine 
						organic products and solutions for conscious, helthy living"</h3> </td>
							
							
						<td><strong><h2>OUR MISSION	</h2></strong></td>
						<td><h3>"To be a vehicle of consciousness in the global market by creating a 
						holistic sustainable business modelity, which inspires, promotes and supports
						well being and respect for all beings and for mother nature"</h3> </td>
						
						
		            </table>
			
		    <img src="images/homeBgPic2.jpg" style="width:100%; height:400px;  right:0px; left:0px; marging:5px;" >
	 
	 
	   
	<?php  require_once('include/footer.php');?>
    </div><!--wrapper-->
	
</body>
</html>