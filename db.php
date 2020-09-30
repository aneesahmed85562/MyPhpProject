<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="bootstrap-4.4.1-dist\css\bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
<?php

$host= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mysql";

$con = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
//print_r($con);
if(!$con)
{
	echo(mysqli_errno($con));
	exit();
}
$query = "select * from help_category";
$result = mysqli_query($con,$query);
?>

	<table border="1px" class="table">

	<thead class="thead-dark">
	<tr>
	<th scope="col">ID</th>
	<th scope="col">Name</th>
	<th scope="col"> Parent Category ID</th>
	</tr>
	</thead>
		<tbody>
	<?php
		while($row= mysqli_fetch_assoc($result))
		{
		?>
			<tr>
				<td scope="row"> <?php echo $row['help_category_id'] ?> </td>
				<td> <?=$row['name']?></td>
				<td> <?=$row['parent_category_id']?> </td>
			</tr>
		<?php
		} ?>
		</tbody>
	</table>

	</body>

</html>
<script src="C:\xampp\htdocs\MyPhpProject\bootstrap-4.4.1-dist\js\Jquery.js"></script>
<script src="C:\xampp\htdocs\MyPhpProject\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
