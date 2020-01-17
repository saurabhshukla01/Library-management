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
	<br><br><center>
		<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td width="200px" height="50px">Enter Book Name</td>
				<td width="200px" height="50px"><input type="text" name="bname" placeholder="Enter Book Name"></td>
			</tr>
			<tr>
				<td width="200px" height="50px">Enter Book Price</td>
				<td width="200px" height="50px"><input type="text" name="price" placeholder="Enter Book Price"></td>
			</tr>
			<tr>
				<td width="200px" height="50px">Enter Book Category</td>
				<td width="200px" height="50px">
					<select name="cat">
						<option>-----select------</option>
						<option>Romentic</option>
							<option>Biography</option>
								<option>Ditective</option>
									<option>Suspence</option>

					</select>
				</td>
			</tr>
			<tr>
				<td width="200px" height="50px">Enter Book Image</td>
				<td width="200px" height="50px"><input type="file" name="img"></td>
			</tr>
			<tr>
				<td><input type="submit" name="sub" value="Save"></td>
			</tr>
		</table>
	</form>
	<?php
     if(isset($_POST['sub']))
     {
     	   $name=$_POST['bname'];
     	   $price=$_POST['price'];
     	   $cat=$_POST['cat'];
     	  $image=$_FILES['img']['name'];
          $image_tmp=$_FILES['img']['tmp_name'];
	       move_uploaded_file($image_tmp,"../im/$image");
           if(mysqli_query($link,"insert into book (name,cat,price,img) values('$name','$cat','$price','$image')"))
           {
           	    echo "<script>alert('Data Insert')</script>";
           }
           else
           {
           	      echo "<script>alert('Data Not Insert')</script>";
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