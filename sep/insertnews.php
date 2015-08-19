<?php
require('myconfig.php');
if(isset($_POST['postnews']))
	{
		$hid =mysql_real_escape_string($_POST['hid']);
		$heading =mysql_real_escape_string($_POST['heading']);
		$bdy =mysql_real_escape_string($_POST['bdy']);
		
		$sql = "INSERT INTO newsfeed (hid, heading, content)
VALUES ('$hid', '$heading', '$bdy')";
		
		
		
		$result =$con->query($sql);
		
		if($result)
		{
	//		Header("Location: index.html");
Header("Location: /sep/index.html");
	

		//echo 'success';
		}
		else
		{
			echo 'sorry';
		}
				
	}

//$conn->close();
?>