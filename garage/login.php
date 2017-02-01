<?php	
	include "connection.php";
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Car Garage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!----- Scroll top --------->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-----End  Scroll top --------->
</head>
<body>
  <div class="wrap">
        <div class="header">  	
		 <div class="header_image">
		   <img src="images/header_img2.jpg" alt="" />
		   				<div class="header_desc">
				 			 <div class="logo">
				 				<a href="index.php"><img src="images/logo.png" alt="" /></a>
							 </div>							
		     		    </div>			
		 		</div>				
              <div class="header-bottom">
		          <div class="menu">
					    <ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							
							<li ><a href="contact.php">Contact</a></li>
							<li class="active"><a href="login.php">Login</a></li>
							<div class="clear"></div>
						</ul>
					</div>
		        <div class="social-icons">						
		                <ul>
		                    <li><a class="facebook" href="#" target="_blank"> </a></li>
		                    <li><a class="twitter" href="#" target="_blank"></a></li>
		                    <li><a class="googleplus" href="#" target="_blank"></a></li>
		                    <li><a class="rss" href="#" target="_blank"></a></li>
		                    <div class="clear"></div>
		                </ul>
		 		    </div>
		 		    <div class="clear"></div>
               </div>
             </div>
         </div>	
   <div class="wrap">
   	 <div class="main">
	    <div class="content">
	    	<h2>Login</h2>
	    	 <div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
					    <form method="POST" action="login1.php">
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						   <div>
						    	<span><label>Password</label></span>
						    	<span><input name="Pass" type="password" class="textbox"></span>
						    </div>
						   <div>
							<span><input type="submit" name="submit" value="Login"></span>
						  </div>
						  <div>
						  	</div>
						  <div>
						  <span><label>Register your issues with the car here after login.</label></span>
						  	</div>
						  <div>
						  	</div>
						  <div>
						   		<a href="reg.php" class="button">Register</a>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="company_address">
				     	<h2 style="padding:10px 0">Company Information :</h2>
						    	<p>DBIT,</p>
						   		<p>Mumbai,</p>
						   		<p>INDIA</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		
				 	 	<p>Email: <span><a href="#">info@carrepair.com</a></span></p>
				   		<p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
				   </div>
					       			
				 </div>
			  </div>			 	   
		    </div>
		</div> 
		</div> 
 <div class="wrap">
   <div class="footer">
   	 <div class="footer_grides">
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest Tweets</h3>
						<div class="post">
				    		<p><span><a href="#">Tuesday,June 31th,2013</a></span></p>
				    		<p>Vacations!! <span><a href="#">[...]</a></span></p>
				       </div>
				       <div class="post">
				    		<p><span><a href="#">Monday,May 21th,2013</a></span></p>
				    		<p>HOLIDAY... Sems hai....<span><a href="#">[...]</a></span></p>
				       </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Connect With Us</h3>
					<div class="social_icons">
                	<ul>
                    	<li><a href="#" class="facebook">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                        </a></li>
                        <li><a href="#" class="twitter">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                        </a></li>
                         <li><a href="#" class="rss">
                        	<span class="icon"> &nbsp;</span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
                        </a></li>
                    </ul>
                </div>
				</div>
				<div class="col_1_of_4 span_1_of_4 timmings">
					<h3>Business Timmings</h3>
					          <ul>
						            <li>Monday : <span>9am - 5pm</span></li>
						     		<li>Tuesday : <span>9am - 5pm</span></li>					     			
						     		<li>Wednesday : <span>9am - 5pm</span></li>
						     		<li>Thursday : <span>9am - 5pm</span></li>					     		
						     		<li>Friday : <span>9am - 5pm</span></li>
						     		<li>Satuarday: <span>9am - 1pm</span></li>
						     		<li>Sunday : <span>Closed</span></li>
						   	   </ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Location</h3>
					      <ul>
						  	  <li>DBIT,</li>
						  	  <li>MUMBAI,</li>
						  	   <li>INDIA.</li>
						  	 <li><span>E-mail :</span>info@carsite.com</li>
						  	 <li><span>Telephone :</span> +91 8898859566</li>
						  	 
						  </ul>
				</div>
			</div>
	    </div>
     </div>
		 <div class="copy_right">
		 	 <div class="wrap">
				<p> © All Rights Reseverd | Design by Brandon & Yash  </p>
			 </div>
		</div>
	 <script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
	<!------------ End scroll Top ------------>
  </div> 
</body>
</html>

