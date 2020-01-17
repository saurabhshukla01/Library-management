<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-image: url('img/b.png'); width: 100%;">

<div id="header">
	<h2 style="padding: 10px"><font face="Cooper">The Readers Plane</font></h2>
</div>
<div id="nav">
	<ul>
		<li><b><a href="index.php">Home</a></b></li>
		<li><b><a href="trb.php">Top rated Book</a></b></li>
		<li><b><a href="block.php">Block</a></b></li>
		<li><b><a href="contect.php">Contect Us</a></b></li>
		<li><b><a href="about.php">About As</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<h2 style="padding: 10px;">Admin Login</h2>
	<br><br><center>
		<form action="" method="post">
		 <table>
		 	<tr>
		 		<td width="200" height="50">Username</td>
		 		<td width="200" height="50"><input style="width: 200px;height: 30px;border-radius: 20px;" type="text" name="un" placeholder="Enter Username"></td>
		 	</tr>
		 	<tr>
		 		<td width="200" height="50">Password</td>
		 		<td width="200" height="50"><input style="width: 200px;height: 30px;border-radius: 20px;" type="password" name="ps" placeholder="Enter Password"></td>
		 	</tr>
		 	<tr>
		 		<td><input style="width: 100px;height: 30px;border-radius: 20px;" type="submit" name="sub" value="Login"></td>
		 	</tr>
		 </table>
		</form>
		<?php
         if(isset($_POST['sub']))
         {
          	$un=$_POST['un'];
         	$ps=$_POST['ps'];
         	$q="select * from admin";
         	$run=mysqli_query($link,$q);
         	$row=mysqli_fetch_array($run);
         	echo $u=$row['un'];
         		echo $p=$row['ps'];
         		if($un==$u && $ps==$p)
         		{
         			header("Location:ahome.php");
         		}
         		else
         		{
         			header("Location:index.php?wrong user");
         		}


         }
		?>
	</center>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px; color: red" align="center">My Project HD</h1>
</div>
</body>
</html>