<!DOCTYPE html>
<html>
<head>
	<title>Database connectivity to MySQL</title>
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
	<h1 class="text-primary">Database connectivity to MySQL</h1>
	
	<div class="col-lg-6">
	<form accept="#" method="POST">
	Roll no : <input type="number"  name="roll" class="form-control"><br/><br/>
	Name : <input type="text"  name="name" class="form-control"><br/><br/>
	Department : <input type="text"  name="department" class="form-control"><br/><br/>
	<input type="submit" name="submit" value="Add" class="btn btn-success">
</form>
</div>
</center>

</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['department'];

    $con =  mysqli_connect('localhost','root','','students_db');
    if($con)
    {
        $sql = "INSERT INTO stud VALUES('$roll','$name','$dept')";

        $result = mysqli_query($con,$sql);

        if($result)
        {
            echo "<center>Record inserted successfully</center>";
        }
        else{
            echo "an error occured while inserting record";
        }

        mysqli_close($con);
    }
    else
    {
        echo "connection not established";
    }
}

?>