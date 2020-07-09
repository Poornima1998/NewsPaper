<html>
<head>
<title>INSERT</title>
</head>
<body bgcolor="#d98cb3"><br>
<div style="background-color:#ffb3ec " 
><center><font color="black" size="30" >NEWS INSERT</font></center></div>

<br><br><br><br><br>
<table align="center" bgcolor="#bf4080">

<form name="f" method="post" action="insertdescription.php">
<tr><td>
<input type="text" name="t" placeholder="Title">
</td>
</tr>
<tr><td>
<p>Image:</p><br>											   
 <input type="file" name="im">
</td></tr>
<tr><td>
<p>
Details
</p>
<textarea id="txtarea" name="comm" rows="4" cols="50" placeholder="Give Us More Information!!!">
</textarea>
</td>
</tr>
	<tr><td>
<input type="text" name="rn" placeholder="Repoters name">
</td>
</tr><td><tr><td>
<input type="submit" name="submit" value="Submit">
</td><td>
<input type="reset" name="reset" value="Reset">
</td></tr>
</form>
</table>
	<br><br><br><br><br>
	<center>
	<section>
		<img class="slideshow" src="7.jpg" style="width: 50%;height: 50%">
		<img class="slideshow" src="8.jpg" style="width: 50%;height: 50%">
		<img class="slideshow" src="9.jpg" style="width: 50%;height: 50%">
		<img class="slideshow" src="10.jpg" style="width: 50%;height: 50%">
	</section>
	</center>


	<script language="javascript" type="text/javascript">

		var index=0;
		change();

		function change(){
		var i;
		var x=document.getElementsByClassName("slideshow");
		for (i = 0; i < x.length; i++) {
			x[i].style.display="none";
		}
		index++;
		if (index>x.length) {index=1}
		x[index-1].style.display="block";
		setTimeout(change,3000);
		}
	</script>
</body>
</html>

