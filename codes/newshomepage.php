<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
	<script language="javascript" type="text/javascript">
		
		function myF()
		{
			
			var x=prompt("Enter user name","user name");
			var y=prompt("Enter password","password");
			if (x!="un18" || y!="2045") {
				myF();
			}	
		}
		function myFun()
		{
			
			var p=prompt("Enter user name","user name");
			var q=prompt("Enter password","password");
			if (p!="un44" || q!="5032") {
				myFun();
			}	
		}
			
	</script>
</head>
<body style="background-color:#9494b8 ">
	<nav style="background-color:#47476b " >
		<br><br><font color="red" size="5">AdaNews.lk</font>
		<img src="news.jpg" style="width: 300px; height: 100px;" align="right">
		<br><br><br><br><br><br>
		<button style="background-color: #eb99ff "><a href="newshomepage.php">Home</a></button>
		<button style="background-color: #eb99ff "><a href="news.php">News</a></button>
		<button style="background-color: #eb99ff"  onClick="myF()"><a href="insert.php"> Insert News</a></button>
		<button style="background-color: #eb99ff" onClick="myFun()" ><a href="deletes.php">Delete News</a></button>
	</nav><br><br><br>
	<center>
	<section>
		<img class="slide" src="1.jpg" style="width: 75%;height: 75%">
		<img class="slide" src="2.jpg" style="width: 75%;height: 75%">
		<img class="slide" src="3.jpg" style="width: 75%;height: 75%">
		<img class="slide" src="4.jpg" style="width: 75%;height: 75%">
		<img class="slide" src="5.jpg" style="width: 75%;height: 75%">
		<img class="slide" src="6.jpg" style="width: 75%;height: 75%">
	</section>
	</center>


	<script language="javascript" type="text/javascript">

		var index=0;
		carousel();

		function carousel(){
		var i;
		var x=document.getElementsByClassName("slide");
		for (i = 0; i < x.length; i++) {
			x[i].style.display="none";
		}
		index++;
		if (index>x.length) {index=1}
		x[index-1].style.display="block";
		setTimeout(carousel,3000);
		}
	</script>
</body>
</html>