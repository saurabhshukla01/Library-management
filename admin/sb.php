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
	<h1>Sell Book List</h1>
	<center><table border="1" align="center ">
		<tr>
			<th width="200" height="50">Book Name</th>
			<th width="200" height="50">Book Id</th>
			<th width="200" height="50">Name</th>
			<th width="200" height="50">Address</th>
			<th width="200" height="50">City</th>
			<th width="200" height="50">Mobile No</th>
			<th width="200" height="50">E-Mail</th>
			<th width="200" height="50">Pin Code</th>
		</tr>
		<?php
        $q="select * from sell";
        $run=mysqli_query($link,$q);
        while($row=mysqli_fetch_array($run))
        {
         $bname=$row['bname'];
         $bid=$row['bid'];
         $name1=$row['name1'];
          $add1=$row['add1'];
         $city=$row['city'];
         $mno=$row['mno'];
            $email=$row['email'];
         $pin=$row['pin'];
		?>
		<tr>
           <td width="200" height="50"><center><?php echo $bname ?></center></td>
            <td width="200" height="50"><center><?php echo $bid ?></center></td>
             <td width="200" height="50"><center><?php echo $name1 ?></center></td>
             <td width="200" height="50"><center><?php echo $add1 ?></center></td>
            <td width="200" height="50"><center><?php echo $city ?></center></td>
             <td width="200" height="50"><center><?php echo $mno ?></center></td>
             <td width="200" height="50"><center><?php echo $email ?></center></td>
            <td width="200" height="50"><center><?php echo $pin ?></center></td>
             
           
		</tr>
		<?php
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