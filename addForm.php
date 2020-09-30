<?php
$host= "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "mydbaa";

$con = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
//print_r($con);
if(!$con)
{
	echo(mysqli_errno($con));
	exit();
}
extract($_POST);
mysqli_query($con,"insert into tbl_data1(Name,Email) values('$host','$user')");

?>
<centre> <h4 style="color:Green;">Data Has been Inserted Succesfully</h4> </centre>