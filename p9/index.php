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
	<form accept="#" method="POST">
	Emp ID : <input type="number"  name="id" class="form-control"><br/><br/>
	Name : <input type="text"  name="name" class="form-control"><br/><br/>
	Department : <input type="text"  name="name" class="form-control"><br/><br/>

	<input type="submit" name="submit" value="add" class="btn btn-success">

</form>
</div>
</center>

<div class="container">
<table class="table">
	<thead>
		<th>Emp ID</th>
		<th>Name</th>
		<th>Department</th>
		<th>Delete</th>
	</thead>
</table>
</div>
</body>
</html>