<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
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
						<h1><a href="#" id="logo">Untitled
                        <?php
                        if(isset($_POST['drop'])) 
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
if(isset($_POST['drop']))
	{
		//echo 'inside';
		
		$sid =($_POST['sid']);
	//	$pass =($_POST['pass']);
	
	  //         echo $sid;
		//	   echo $pass;
     			
				
				
	}
$sql1 = "SELECT cname1, cname2, cname3,grade1,grade2, grade3 , cgpa FROM studentinfo where sid = '$sid'";

		//echo $sid;
	
		$result1 =$con->query($sql1);
if ($result1) {
    //echo $sid;
	
	
	// output data of each row
	$i = 0;
    while($row = $result1->fetch_assoc()) {
       ?>
       <div>
       <br>
       </div>
       <div>
       
       <form action="dropthenadd1.php" method="post" name="drop1">
	   <?php 
	   
	   echo " CourseName1: " . $row["cname1"]. "<br>";
	   
	   echo " Grade1: " . $row["grade1"]. "<br>";

?>

<input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>

<input name="cname1" type="hidden" value=<?php
echo $row["cname1"];?> >
	<input name="drop1" type="submit" value="drop1">
</form> </div><div>
<form action="dropthenadd2.php" method="post" name="drop2">
	   
<?php
	
	   echo " CourseName2: " . $row["cname2"]. "<br>";
	   echo " Grade2: " . $row["grade2"]. "<br>";
	  
	  ?>
<input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
      
<input name="cname2" type="hidden" value=<?php
echo $row["cname2"];?>>
      
<input name="drop2" type="submit" value="drop2">
	  </form>
</div><div>
<form action="dropthenadd3.php" method="post" name="drop3">

	  <?php
	   echo " CourseName3: " . $row["cname3"]. "<br>";
	  
	   
	
	   echo " Grade3: " . $row["grade3"]. "<br>";
?><input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
<input name="cname3" type="hidden" value=<?php
echo $row["cname3"];
?>>

<input name="drop3" type="submit" value="drop3">
	</form>

   
       </div>
	   
	   
	   
	   <?php
	   $i = $i + 1;
    }
} else {
    echo "0 results";
}

?>
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