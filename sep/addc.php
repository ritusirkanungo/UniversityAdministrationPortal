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
						<h1><a href="#" id="logo">
                        
                        <?php
                        if(isset($_POST['add'])) 
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
							<h2>Add Course</h2>
						</header>
						<p>
                        
                        <form action="insertStudent.php" method="post" name="Done" class="Done" id="Done" >
                       <table border="1" width="800px" cellspacing="1" cellpadding="1" >
            <tbody align="center">
                <tr>
                    <td>Course Name1</td>
                    <td><select name="cname1">
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
                    
                    
                    
                  </td>
                </tr>
                <tr>
                    <td>Course Name2</td>
                    <td>
                    <select name="cname2">
                    <option>Programming Languages</option>
                      <option>Database Systems</option>
                      <option>Data communication</option>
                      <option>Data Networking</option>
                    
                    
                      <option>Big Data</option>
                      <option>Programming in Python</option>
                      <option>Operating Systems</option>
                      <option>Software Engineering</option>
                      <option>Algorithms</option>
                      <option>Data Science</option>
                      <option>Cryptography</option>
                      <option>Machine Learning</option>
                      <option>Computer Graphics</option>
                      <option>Social Multiplayer Games</option>
                      <option>Advanced Operating Systems</option>
                    
                    
                    </select>
                    
                    
                  </td>
                </tr>
                <tr>
                    <td>Course Name3</td>
                    <td>
                    <select name="cname3">
                      <option>Data Science</option>
                      <option>Cryptography</option>
                      <option>Machine Learning</option>
                      <option>Computer Graphics</option>
                      <option>Social Multiplayer Games</option>
                      <option>Advanced Operating Systems</option>
                    
                      <option>Big Data</option>
                      <option>Programming in Python</option>
                      <option>Operating Systems</option>
                      <option>Software Engineering</option>
                      <option>Algorithms</option>
                    <option>Programming Languages</option>
                      <option>Database Systems</option>
                      <option>Data communication</option>
                      <option>Data Networking</option>
                    </select>
                    
                    
                  </td>
                </tr>
                
                
              
                
                <tr>
                    <td></td>
                    
                </tr>



                <tr>
                <input name="sid" type="hidden" value=<?php
                
				
				
				echo $_POST['sid'];
				?>>
                
                <input name="pass" type="hidden" value=<?php
                
				
				
				echo $_POST['pass'];
				?>>
                    <td colspan="2"><input type="submit" name="Done" value="Done"/></td>
                    
                </tr>
            </tbody>
        </table> 
                        
                        
                        
                        
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