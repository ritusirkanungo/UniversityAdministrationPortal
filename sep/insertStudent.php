<?php
require('myconfig.php');
if(isset($_POST['Done']))
	{
		$sid =mysql_real_escape_string($_POST['sid']);
		
		$cname1 =mysql_real_escape_string($_POST['cname1']);
		
		$cname2 =mysql_real_escape_string($_POST['cname2']);
		$cname3 =mysql_real_escape_string($_POST['cname3']);
		$pass =mysql_real_escape_string($_POST['pass']);
		
		
		
		
		$sql = "INSERT INTO studentinfo (sid, pass, cname1,cname2,cname3,grade1,grade2,grade3,cgpa)
VALUES ('$sid','$pass', '$cname1', '$cname2', '$cname3','0','0','0','0')";
		
		
		
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