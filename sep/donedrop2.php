<?php
require('myconfig.php');
if(isset($_POST['ADD']))
	{
		$sid =mysql_real_escape_string($_POST['sid']);
		$cname2 =mysql_real_escape_string($_POST['cname2']);
		
		$sql = "UPDATE studentinfo SET cname2 = '$cname2'
WHERE sid = '$sid'";
		
		
		
		$result =$con->query($sql);
		
		if($result)
		{
	//		Header("Location: index.html");
Header("Location: /sep/StudentLogin.php");
	

		//echo 'success';
		}
		else
		{
			echo 'sorry';
		}
				
	}

//$conn->close();
?>