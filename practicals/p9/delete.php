
<?php

$id = $_POST['id'];

$con =  mysqli_connect('localhost','root','','emp');

if($con)
{
	$sql = "DELETE FROM employees WHERE id='$id'";

	if(mysqli_query($con,$sql))
	{
		echo "Record Deleted Successfully";
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