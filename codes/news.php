<html>
<head>
<meta charset="utf-8">
<title>ADA News</title>
</head>

<body bgcolor="#ff8080">
	
	<table style="width:100%" bgcolor="#ff4d4d">
	<tr><td><img src="news.jpg" height="30%" width="50%"></td></tr>
</table>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "News";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Ino,Title,Img,Info,date,RName FROM news";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
    
	
    while($row = mysqli_fetch_assoc($result)) 
	{
		echo "<table><tr><td><h1><u>".$row["Title"]."</h1></U></td></tr>"."<tr><td>".$row["Info"]."</td></tr><br>";
	
		echo "<img src='",$row['Img'],"' width='175' height='200' />";
    }
    echo "</table>";
        
    }
else {
    echo "0 results";
}

mysqli_close($conn);
?>	
	
</body>
</html>
