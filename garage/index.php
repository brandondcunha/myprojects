<?php
	include "connection.php";
	//session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Car Garage</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<!----- Scroll top --------->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-----End  Scroll top --------->
 <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
  <div class="wrap">
  	 <div class="header">  	
		 		<!--- Slider --->				
				     <div class="slider">
				      <div class="slider-wrapper theme-default">
				            <div id="slider" class="nivoSlider">
				                <img src="images/1.jpg" data-thumb="images/1.jpg" alt="" />
				                <img src="images/4.jpg" data-thumb="images/2.jpg" alt="" />
				                <img src="images/3.jpg" data-thumb="images/3.jpg" alt="" />
				                <img src="images/2.jpg" data-thumb="images/4.jpg" alt="" />
				            </div>
				        </div>
				          <div class="header_desc">
				 			 <div class="logo">
				 				<a href="index.php"><img src="images/logo.png" alt="" /></a>
							 </div>							
		     		    </div>
				   </div>
			     <!--- End Slider --->
		   <div class="header-bottom">
		      <div class="menu">
					    <ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="services.php">Services</a></li>
							
							<li><a href="contact.php">Contact</a></li>
							<li ><a href="login.php">LogIn</a></li>
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
	    	<div class="content_top">
	    	     <div class="section group">
					   <div class="col_1_of_4 span_1_of_4">
						  <div class="num-heading">
					         <div class="number">
								<figure><span>1</span></figure>
						     </div>
						     <div class="heading">								
								<h4>Car Repair</h4>
							 </div>
							<div class="clear"></div>
							</div> 
							    <div class="heading-desc">	
								     <p>offer paintwork repairs to scratches, scuffs and dents to vehicle damage as well as damage caused by collisions and major accidents.</p>
						       		 <a href="#" class="button">Read More</a>
						       	</div>	
					  </div>
						 <div class="col_1_of_4 span_1_of_4">
							<div class="num-heading">
						       <div class="number">
									<figure><span>2</span></figure>
							    </div>
							    <div class="heading">								
								  <h4>Wheel Alignment</h4>
							    </div>
							    <div class="clear"></div>
								</div> 
								<div class="heading-desc">	
									<p>The primary angles are the basic angle alignment of the wheels relative to each other and to the car body. These adjustments are the camber, caster and toe. On some cars, not all of these can be adjusted on every wheel.</p>					       		
							         <a href="#" class="button">Read More</a>
							   </div>					
						 </div>
				 <div class="col_1_of_4 span_1_of_4">
					<div class="num-heading">
				       <div class="number">
							<figure><span>3</span></figure>
					    </div>
					    <div class="heading">								
							<h4>car wash</h4>
						</div>
					    <div class="clear"></div>
						</div> 
						<div class="heading-desc">	
							<p>A simple and automated type of car wash that is typically coin-operated or token-operated self-service system.</p>
					         <a href="#" class="button">Read More</a>
					 </div>					
				</div>
					  <div class="col_1_of_4 span_1_of_4">
						 <div class="num-heading">
					       <div class="number">
								<figure><span>4</span></figure>
						   </div>
						   <div class="heading">								
							  <h4>Auto Towing</h4>
						   </div>
						    <div class="clear"></div>
							</div> 
							    <div class="heading-desc">	
								    <p>We use an adjustable boom winch to recover vehicles from a ditch, over an embankment, or any place the vehicle cannot be safely reach backing-up.</p>
						       		<a href="#" class="button button-icon button-icon-demo">Read More</a>
						       </div>
					    </div>
			      </div>
	    	</div>	
	    	   <div class="content-bottom">
		    	   	<div class="section group">
		    	   		<div class="col_1_of_3 span_1_of_3">
						<h3>Welcome</h3>
						<img src="images/welcome.jpg" alt=""/>
						<p style="padding-top:10px;">We offer paintwork repairs to scratches, scuffs and dents to vehicle damage as well as damage caused by collisions and major accidents.</p>
					</div>
						<div class="col_1_of_3 span_1_of_3">
							<h3>What we do</h3>
							   <ul>
		  						<li>Modify</li>
		  						<li>Repair</li>
		  						<li>Imported Modifications</li>
		  						<li>Replace interior</li>
		  						<li>FX sounds</li>
		  						<li>Re painting</li>
		  						<li>Nos</li>
		  						
		  			        </ul>
						</div>					
						<div class="col_1_of_3 span_1_of_3">
							<h3>Our Team</h3>
							<div class="post-grid">
								<img src="images/team-1.jpg" alt="" />
								<p><span> Brandon D'cunha</span></p>
									<p>Senior Designer <a href="#">[...]</a></p>
								<div class="clear"> </div>
					 		 </div>
					 		 <div class="post-grid">
								<img src="images/team-2.jpg"  alt="" />
								<p><span>Yash Ambre</span></p>
									<p>Senior Mechanic<a href="#">[...]</a></p>
								<div class="clear"> </div>
					 		 </div>
					 		 
					 		 </div>
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
		<!------------ scroll Top ------------>
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

