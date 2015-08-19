<?php
require('myconfig.php');
if(isset($_POST['ADD']))
	{
		$sid =mysql_real_escape_string($_POST['sid']);
		$cname1 =mysql_real_escape_string($_POST['cname1']);
		
		$sql = "UPDATE studentinfo SET cname1 = '$cname1'
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