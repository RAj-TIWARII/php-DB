<?php
$localhost = 'localhost';
$root = 'root';
$password = '';
$db = 'notfb';
$con = mysqli_connect($localhost, $root, $password, $db);
?>

<html lang="en">
<head>
<title>View Form</title>
</head>
  <h1>KK</h1>


	<table border="1">
	<tr>
	<td>sno</td>
	<td>name</td>
	<td>surname'</td>
	<td>day</td>
	<td>month</td>
	<td>year</td>
	<td>email </td>
	<td>password</td>
	
	</tr>
	  <?php
     $query = "select * from notfbdb ";
     $data = mysqli_query($con,$query);
    while($result = mysqli_fetch_array($data)){
    ?>

	<tr>
	<td><?php echo $result['sno'];?></td>
	<td><?php echo $result['name'];?></td>
	<td><?php echo $result['surname'];?></td>
	<td><?php echo $result['day'];?></td>
	<td><?php echo $result['month'];?></td>
	<td><?php echo $result['year'];?></td>
	<td><?php echo $result['email'];?></td>
	<td><?php echo $result['password'];?></td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>
