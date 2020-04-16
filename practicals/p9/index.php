<!DOCTYPE html>
<html>
<head>
	<title>Employee Management System</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<center>
	<h1 class="text-primary">Employee Management System</h1>
	
	<div class="col-lg-6">
	<form action="add.php" method="POST">
	Emp ID : <input type="number"  name="id" class="form-control"><br/><br/>
	Name : <input type="text"  name="name" class="form-control"><br/><br/>
	Department : <input type="text"  name="dept" class="form-control"><br/><br/>

	<input type="submit" name="submit" value="add" class="btn btn-success">

</form>
</div>
</center>

<br/>


<?php 

$con =  mysqli_connect('localhost','root','','emp');

if($con)
{
	$sql = "SELECT * FROM employees";

	$result = mysqli_query($con,$sql);
	//$data = mysqli_fetch_assoc($result);

	$projects = array();
    while ($project =  mysqli_fetch_assoc($result))
    {
        $data[] = $project;
    }
	//print_r($data)
	?>
<div class="container">
<table class="table">
	<thead>
		<th>Emp ID</th>
		<th>Name</th>
		<th>Department</th>
		<th>Delete</th>
	</thead>
	<tbody>
		<?php foreach($data as $row){ ?>
		<tr>
			<td><?= $row['id']; ?></td>
			<td><?= $row['name']; ?></td>
			<td><?= $row['dept']; ?></td>
			<td><form action="delete.php" method="POST"><input type="hidden" name="id" value=<?= $row['id'] ?> /><button type="submit" class="btn btn-danger">delete</button></form></td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>


	<?php

	mysqli_close($con);

}
else
{
	echo "connection not established"; 
	echo "<b/><br/><a href='index.php'>Go Back</a>";
}



?>




</body>
</html>