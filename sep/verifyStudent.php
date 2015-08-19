<?php
require('myconfig.php');
if(isset($_POST['login']))
	{
		$sid =mysql_real_escape_string($_POST['sid']);
		$pass =mysql_real_escape_string($_POST['pass']);
		
		$sql = "Select * from verfifystudent WHERE sid = '$sid'";
		
		
		
		$result =$con->query($sql);
		
		if($result)
		{
	//		Header("Location: index.html");
Header("Location: /sep/inStudent.php");
	

		//echo 'success';
		}
		else
		{
			echo 'Authentication Failed';
		}
				
	}

//$conn->close();
?>