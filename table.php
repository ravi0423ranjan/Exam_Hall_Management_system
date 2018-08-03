<!doctype html>
<html>
<head>
<style>
table{width:100%}
</style>
</head>
<body>
<table border="1">
<tr>
<th>Room no.</th>
<th>Trade</th>
<th>Date</th>
<th>Paper code</th>
<th>Roll no.</th>
</tr>
<?php
include('dbconnect.php');
$query="select * from admins";
$run=mysqli_query($con,$query);

while($row=mysqli_fetch_array($run,MYSQLI_ASSOC)){
	$id=$row['id'];
	$roll=$row['roll'];
	$room=$row['room'];
	$code=$row['code'];
	$date=$row['date'];
	$trade=$row['trade'];

?>

<tr>
<th><?php echo $room ?></th>
<th><?php echo $trade ?></th>
<th><?php echo $date ?></th>
<th><?php echo $code ?></th>
<th><?php echo $roll ?></th>
</tr>
<?php
}
?>
</table>
</html>
