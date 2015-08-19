<?php
//require('myconfig.php');
if(isset($_POST['login']))
	{
		$adminid =($_POST['adminid']);
		$pass =($_POST['pass']);
		
		
		
		if($adminid == 'admin' && $pass = 'admin')
		{
	//		Header("Location: index.html");
Header("Location: /sep/entergrades.php");
	

		//echo 'success';
		}
		else
		{
			echo 'Unable to access admin control';
		}
				
	}

//$conn->close();
?>