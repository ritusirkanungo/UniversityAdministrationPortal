<!DOCTYPE HTML>
<!--
	
-->
<html>
	<head>
		<title>Online University System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="#" id="logo">View & Listen to NewsFeed</a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							<h2>Hot News</h2>
							<span class="byline">Trending topics</span></header>
						<p>
                        
                        <form action="" method="get" name="Signin" class="playnews" id="playnews" >
 <div>
 
<?php
require('myconfig.php');

//echo "hello dude0";

$sql1 = "SELECT hid, heading, content FROM newsfeed";
//$result1 = $conn->query($sql1);

		#$result1 = mysqli_query($sql1) or die(mysql_error());
		
		
	
		$result1 =$con->query($sql1);
		
		
if ($result1->num_rows > 0) {
    // output data of each row
	$i = 0;
    while($row = $result1->fetch_assoc()) {
       ?>
       <div>
       
       <br>
       
       </div>
	   
       
       
       <div><?php echo "hid: " . $row["hid"]. "<br>";
	   
	   
	   echo " Heading: " . $row["heading"]. "<br>";
	   
	   echo " Content: " . $row["content"]. "<br>";
	   ?>
       <input value="Play" type="button" onclick=p1<?php echo $row["hid"]; ?>()>
       <input type="button" onclick=stop1() value="Stop">
	   <script src=js/responsiveVoice.js></script>
	   <script>
	   p1<?php echo $row["hid"]; ?> = function()
	   {
		   //alert($row["content"]);
		   var cont = "<?php echo $row['content']; ?>";
		   responsiveVoice.speak(cont,responsiveVoice.setDefaultVoice());
	   }
	   stop1 = function()
	   {
		   responsiveVoice.cancel();
	   }
	   </script>
       </div>
	   
	   
	   
	   <?php
	   $i = $i + 1;
    }
} else {
    echo "0 results";
}

?>
</div>
                        
                        
                        
                        
                        </form>
                        
                        
                        
                        
                        </p>
					</section>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">

					<!-- Lists -->
						<div class="row">
							<div class="8u">
								<section>
								  <header class="major">
										<h2>New York University</h2>
										Services@NYU
								  </header>
									<div class="row">
										<section class="6u">
											<ul class="default">
												<li><a href="#">University Life</a></li>
												<li><a href="#">Research.</a></li>
												<li><a href="#">Admissions</a></li>
												<li><a href="#">Diversity at NYU</a></li>
											</ul>
										</section>
									</div>
								</section>
							</div>
							<div class="4u">
								<section>
								  <header class="major">
										<h2>Registrar's Office</h2>
								  </header>
									<ul class="contact">
										<li>
											<span class="address">Address</span>
											<span>55 Mercer Street, New York University <br />New York, NY 10012</span>
										</li>
										<li>
											<span class="mail">Mail</span>
											<span><a href="#">sj1826@nyu.edu</a></span>
										</li>
										<li>
											<span class="phone">Phone</span>
											<span>(212) 123-4545</span>
										</li>
									</ul>	
								</section>
							</div>
						</div>

					<!-- Copyright -->
						<div class="copyright">
							Design: Ritu Sirkanungo, Sarthak Jain 
						</div>

				</div>
			</div>

	</body>
</html>