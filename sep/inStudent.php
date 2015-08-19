

<!DOCTYPE HTML>

<?php
require('myconfig.php');
if(isset($_POST['login']))
	{
		$sid =($_POST['sid']);
		$pass =($_POST['pass']);
	
		if(($sid == 'rs4773@nyu.edu' && $pass = 'ritu') || ($sid == 'sj1826@nyu.edu' && $pass = 'sarthak') )
		{
	//		Header("Location: index.html");
//Header("Location: /sep/entergrades.php");
	

		//echo 'success';
		}
		else
		{
			Header("Location: /sep/index.html");
			echo 'Unable to access admin control';
		}			
	
	
	
	
	}
		
//$conn->close();
?>


<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Left Sidebar - Horizons by TEMPLATED</title>
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
            
            
            <link href="templated-privy/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="templated-privy/default.css" rel="stylesheet" type="text/css" media="all" />

            
            
            
            
            
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="left-sidebar">

		<!-- Header -->
			<div id="header">
			  <div class="container">
			    <!-- Logo -->
			    <h1><a href="#" id="logo"></a>
                Hello
                <?php
                //require('myconfig.php');
if(isset($_POST['login']))
	{
		//echo 'inside';
		
		$sid =($_POST['sid']);
		$pass =($_POST['pass']);
	
	           echo $sid;
	//		   echo $pass;
     			
	}
//$uid = "hahaha";
                
                
                ?>
                
                
                
                
                
                </h1>
			    <!-- Nav -->
			    <nav id="nav">
			      <ul>
			        <li><a href="index.html">Home</a></li>
			        <li> <a href="">Register for Courses</a>
			          <ul>
			            <li><a href="#">Add Courses</a></li>
			            <li><a href="#">Drop Courses</a></li>
			            <li><a href="#">View Enrolled Courses</a></li>
			            <li> <a href="">Phasellus consequat</a>
			              <ul>
			                <li><a href="#">Lorem ipsum dolor</a></li>
			                <li><a href="#">Phasellus consequat</a></li>
			                <li><a href="#">Magna phasellus</a></li>
			                <li><a href="#">Etiam dolore nisl</a></li>
			                <li><a href="#">Veroeros feugiat</a></li>
		                  </ul>
		                </li>
			            <li><a href="#">Veroeros feugiat</a></li>
		              </ul>
		            </li>
			        <li><a href="left-sidebar.html">View Grades</a></li>
			        <li><a href="inStudentemail.html">Email</a></li>
			        <li><a href="left-sidebar.html">Sign Out</a></li>
		          </ul>
		        </nav>
		      </div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<div class="row">
					
						<!-- Sidebar -->
                                              
                        
						<div id="sidebar" class="4u sidebar">
							
							<section>
								<div id="sidehead">
		<div id="logo1">
			<img src="templated-privy/images/pic02.jpg" alt="" />
			<h1><a href="#"><?php
            
			
			echo $sid;
			?></a></h1>
			
		</div>
		<div id="menu1">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li>
                
                <form action="addc.php" method="post" name="add">
                
                <input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
                <input name="pass" type="hidden" value=<?php
                
				
				
				echo $_POST['pass'];
				?>>
                
                
                
                <input name="add" type="submit" value="add">
                
                
                </form>
                
                </li>
				<li>
                
                 <form action="dropStudent.php" method="post" 
                 name="drop">
                
                <input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
                
                <input name="drop" type="submit" value="drop">
                
                
                </form>
               
                
                
                </li>
				<li>
                <form action="viewStudent.php" method="post" 
                 name="view">
                
                <input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
                
                <input name="view" type="submit" value="view">
                
                
                </form>
                
                
                
                </li>
				<li><a href="inStudenteditprofile.html" accesskey="5" title="">Edit Profile</a></li>
			</ul>
		</div>
	</div>
							</section>
						</div>
						
						<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<header class="major">
									<h2>Welcome to your profile !!</h2>
									<span class="byline">Please use our services..</span>
								</header>
								<p>Many new facilities are available !!</p>
							</section>
						</div>
					
					</div>
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