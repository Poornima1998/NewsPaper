<?php
	
	
  $date = date('Y/m/d H:i:s');
	
	
	
	$Title=$_POST["title"];
	$Rname=$_POST["rn"];
	$server="localhost";
	$username="root";
	$password="";
	$db="News";
	
	$con=mysqli_connect($server,$username,$password,$db);
	
	if(!$con)
	{
		die("connection error".mysqli_connect_error());
	}
	echo("Connected Sucessfully <br>");
	
	$sql="DELETE FROM news WHERE Title='$Title'";

	
	if(mysqli_query($con,$sql))
	{
		echo "Deleted sucessesfully";
	}
	else
	{
		echo"Error:".sql."<br>".mysqli_error($con);
	}
	mysqli_close($con);
	
	?>