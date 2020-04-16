<?php

$id = $_POST['id'];
$name = $_POST['name'];
$dept = $_POST['dept'];

$con =  mysqli_connect('localhost','root','','emp');

if($con)
{
	$sql = "INSERT INTO employees VALUES('$id','$name','$dept')";

	if(mysqli_query($con,$sql))
	{
		echo "Record Inserted Successfully";
		echo "<b/><br/><a href='index.php'>Go Back</a>";
	}
	else
	{
		echo "Error in executing query";
		echo "<b/><br/><a href='index.php'>Go Back</a>";
	}

	mysqli_close($con);

}
else
{
	echo "connection not established"; 
	echo "<b/><br/><a href='index.php'>Go Back</a>";
}

?>