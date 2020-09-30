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

	<table border="1px">
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>Parent Category ID</th>
	</tr>
	<?php
		while($row= mysqli_fetch_assoc($result))
		{
		?>
			<tr>
				<td> <?php echo $row['help_category_id'] ?> </td>
				<td> <?=$row['name']?></td>
				<td> <?=$row['parent_category_id']?> </td>
			</tr>
		<?php
		}?>
	</table>

	