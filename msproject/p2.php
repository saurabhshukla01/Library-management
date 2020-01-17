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
		<h3 style="color: red;margin-left: 50px">Romentic Books</h3>
		<?php
		   $c=$_GET['id'];
          $q="select * from book where id like '%$c%'";
        $run=mysqli_query($link,$q);
        $row=mysqli_fetch_array($run);
        
        	$id=$row['id'];
         $bname=$row['name'];
         $price=$row['price'];
         $img=$row['img'];
		?>
		<div id="a">
            
			<?php echo "<a href='p.php?id=$id'><img src='im/$img'></a>"; ?><br>
             <h3><font color="red">Name</font> :<?php echo $bname ?><br>
             	<font color="red">Price</font> :<?php echo $price ?></h3>
             <form action="" method="post">
             	<table>
             		<tr>
             			<td width="200" height="50">Name</td>
             			<td width="200" height="50"><input type="text" name="name" placeholder="Enter Name" title="Enter Name"></td>
             		</tr>
             		<tr>
             			<td width="200" height="50">Address</td>
             			<td width="200" height="50"><input type="text" name="add" placeholder="Enter Address" title="Enter Address"></td>
             		</tr>
             		<tr>
             			<td width="200" height="50">City</td>
             			<td width="200" height="50"><input type="text" name="city" placeholder="Enter City" title="Enter City"></td>
             		</tr>
             		<tr>
             			<td width="200" height="50">Mobile No</td>
             			<td width="200" height="50"><input type="text" name="mno" placeholder="Enter Mobile No ." title="Enter Mobile No ."></td>
             		</tr>
             		<tr>
             			<td width="200" height="50">E-Mail</td>
             			<td width="200" height="50"><input type="text" name="email" placeholder="Enter E-Mail" title="Enter E-Mail"></td>
             		</tr>
             		<tr>
             			<td width="200" height="50">Pin Code</td>
             			<td width="200" height="50"><input type="text" name="pcode" placeholder="Enter Pin Code" title="Enter Pin Code "></td>
             		</tr>
             		<tr>
             			<td><input type="submit" name="sub" value="Bay Now" style="width: 100px;height: 50px;padding: 5px;background-color: red;border-radius: 10px;"></td>
             		</tr>

             	</table>
             </form>
             <?php
             if(isset($_POST['sub']))
             {

             	 $name1=$_POST['name'];
             	 $add1=$_POST['add'];
                 $city=$_POST['city'];
              $mno=$_POST['mno'];
             	 $email=$_POST['email'];
             	 $pcode=$_POST['pcode'];
                 
                 if(mysqli_query($link,"insert into sell (bname,bid,name1,add1,city,mno,email,pin) values('$bname','$id','$name1','$add1','$city','$mno','$email','$pcode')"))

                 {
                    mysqli_query($link,"delete from book where id=$id");

                    echo "<script>alert('Data Inser')</script>";
                 }
                 else
                 {
                      echo "<script>alert('Data Not Inser')</script>";
                 }
             }
             ?>
      
		</div>
	</div>
    <div id="right">
    	<h1 style="color: red">Category</h1>
    	<a href="rom.php"><b>Romentic</b></a><br><br><br><br>

    <a href="bio.php"> <b> Biography</b></a><br><br><br><br>

     <a href="dit.php"><b>Ditective</b></a><br><br><br><br>

     <a href="sus.php"><b>Suspence</b></a>

    </div>
</div>
<div id="footer"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="margin-top: 300px; color: red" align="center">My Project HD</h1>
</div>
</body>
</html>