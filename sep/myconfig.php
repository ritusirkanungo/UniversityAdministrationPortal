<?php
$con = mysqli_connect("localhost","root", "");
if(!$con)
{
	die('Connection Failed'.mysql_error());
}

// selct database 
mysqli_select_db($con,"univ");

#$select_query = "use univ;";

#$con->query($select_query);



?>