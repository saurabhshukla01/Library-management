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
		<li><b><a href="ahome.php">Home</a></b></li>
		<li><b><a href="ib.php">Insert Book</a></b></li>
		<li><b><a href="bl.php">Book List</a></b></li>
		<li><b><a href="sb.php">Sell Book</a></b></li>
		<li><b><a href="b.php">Block</a></b></li>
		<li><b><a href="help.php">Help</a></b></li>
	</ul>
</div>
<div id="container">
	<h1>Book List</h1>
	<form action="" method="post">
	<select name="c">
    <option>-----------------select Cat--------------------</option>
    <option>Romentic</option>
    <option>Biography</option>
    <option>Ditective</option>
    <option>Suspence</option>
	</select>
	<input type="submit" name="sub" value="Ok">
</form>
	<center><table border="1" align="center ">
		<tr>
			<th width="200" height="50">Name</th>
			<th width="200" height="50">Price</th>
			<th width="200" height="50">Cat</th>
		</tr>
		<?php
		if(isset($_POST['sub']))
		{
			 $c=$_POST['c'];
			 if($c=="Romentic")
			 {
		           $qq="select * from book where cat like '%$c%'";
		           $run=mysqli_query($link,$qq);
		           while($row=mysqli_fetch_array($run))
		           {
		           	$name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
		           	?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
		</tr>
		           	<?php

		           }	 	
			 }
			 else if($c=="Ditective")
			 {
		           $qq="select * from book where cat like '%$c%'";
		           $run=mysqli_query($link,$qq);
		           while($row=mysqli_fetch_array($run))
		           {
		           	$name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
		           	?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
		</tr>
		           	<?php

		           }	 	
			 } 
			 else if($c=="Suspence")
			 {
		           $qq="select * from book where cat like '%$c%'";
		           $run=mysqli_query($link,$qq);
		           while($row=mysqli_fetch_array($run))
		           {
		           	$name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
		           	?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
		</tr>
		           	<?php

		           }	 	
			 }
			 else if($c=="Biography")
			 {
		           $qq="select * from book where cat like '%$c%'";
		           $run=mysqli_query($link,$qq);
		           while($row=mysqli_fetch_array($run))
		           {
		           	$name=$row['name'];
                   $price=$row['price'];
                   $cat=$row['cat'];
		           	?>
                     <tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
		</tr>
		           	<?php

		           }	 	
			 }
			 else
			 {
			 	  $q="select * from book";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
         $name=$row['name'];
         $price=$row['price'];
         $cat=$row['cat'];
		?>
		<tr>
           <td width="200" height="50"><center><?php echo $name ?></center></td>
            <td width="200" height="50"><center><?php echo $price ?></center></td>
             <td width="200" height="50"><center><?php echo $cat ?></center></td>
		</tr>
		<?php
        }
	
			 }
		}
    ?>   
	</table>
	</center>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px; color: red" align="center">My Project HD</h1>
</div>
</body>
</html>