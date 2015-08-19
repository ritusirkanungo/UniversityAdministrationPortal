<?php
require('myconfig.php');
if(isset($_POST['SubmitGrades']))
	{
		$sid =mysql_real_escape_string($_POST['sid']);
		
		$grade1 =mysql_real_escape_string($_POST['grade1']);
		
		$grade2 =mysql_real_escape_string($_POST['grade2']);
		$grade3 =mysql_real_escape_string($_POST['grade3']);
		
		$average = ($grade1+$grade2+$grade3)/3;
		
		if($average>80)
		{
		$cgpa = 'A';	
		}
		else
		{
			if($average >60 )
			{
			$cgpa = 'B';
			}
			else
			{
				$cgpa ='F';
				}
			}
		
		
		$sql = 
"UPDATE studentinfo SET grade1 = '$grade1', grade2 = '$grade2',grade3 = '$grade3', cgpa = '$cgpa' 
WHERE sid = '$sid'";
		
		
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