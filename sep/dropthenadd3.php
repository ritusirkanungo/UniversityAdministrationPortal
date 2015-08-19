<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>No Sidebar - Horizons by TEMPLATED</title>
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
						<h1><a href="#" id="logo">Untitled
                        <?php
                        if(isset($_POST['drop3'])) 
						{
$sid = $_POST['sid'];

//echo 'helllo';
echo $sid;
}
						
						
						?>
                        
                        </a></h1>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>
									<a href="">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
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
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							<h2>Course Details</h2>
						</header>
						<p>
                        
                      
 <div>
 
<?php
require('myconfig.php');

//echo "hello dude0";
if(isset($_POST['drop3']))
	{
		//echo 'inside';
		$sid = ($_POST['sid']);
		$cname3 =($_POST['cname3']);
	//	$pass =($_POST['pass']);
	
	  //         echo $sid;
			   echo $cname3;
     			
				
	}?>
	
	<form action="donedrop3.php" method="post" name="ADD">
    
    <select name="cname3">
                      <option>Big Data</option>
                      <option>Programming in Python</option>
                      <option>Operating Systems</option>
                      <option>Software Engineering</option>
                      <option>Algorithms</option>
                  	  <option>Programming Languages</option>
                      <option>Database Systems</option>
                      <option>Data communication</option>
                      <option>Data Networking</option>
                      <option>Data Science</option>
                      <option>Cryptography</option>
                      <option>Machine Learning</option>
                      <option>Computer Graphics</option>
                      <option>Social Multiplayer Games</option>
                      <option>Advanced Operating Systems</option>
                    
                    
                    
                    </select>
                    
                   <input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
                    <input name="ADD" type="submit" value="ADD">
    
    </form>
	   <div>
       <br>
       </div>
</div>
                       
                        
                        
                        
                        
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