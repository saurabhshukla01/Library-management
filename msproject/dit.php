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
	<div id="left"><br><br><br>
		<center><img src="img/banner.png" width="300"></center>
		<br>
		<h3 style="color: red;margin-left: 50px">Ditective</h3>
		<?php
		   $c="Ditective";
          $q="select * from book where cat like '%$c%'";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
        	$id=$row['id'];
         $name=$row['name'];
         $price=$row['price'];
         $img=$row['img'];
		?>
		<div id="a"><center><?php echo "<a href='p.php?id=$id'><img src='im/$img'></a>"; ?></center></div>
		<?php
	     }
		?>
	</div>
    <div id="right">
    	<h1 style="color: red">Category</h1>
    	<a href="rom.php"><b>Romentic</b></a><br><br><br><br>

    <a href="bio.php"> <b> Biography</b></a><br><br><br><br>

     <a href="dit.php"><b>Ditective</b></a><br><br><br><br>

     <a href="sus.php"><b>Suspence</b></a>

    </div>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px; color: red" align="center">My Project HD</h1>
</div>
</body>
</html>