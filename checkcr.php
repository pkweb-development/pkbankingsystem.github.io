<?php
session_start();
include_once'try.inc.php';
$name1=$_SESSION['name'];
$sql="SELECT *FROM users WHERE name = '$name1';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$var=$row['amount'];
$from=$_SESSION['name'];
$to=$_SESSION['to'];
$sql1="SELECT *FROM users WHERE name = '$to';";
$result1 = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result1);
$var1=$row['amount'];
session_destroy();

	if($var1> $_POST["transfer"])
	{
		$sub=$var-$_POST["transfer"];
		$sql="UPDATE users set amount='$sub' WHERE name = '$from';";
		$result = mysqli_query($conn,$sql);
		$sum=$var1+$_POST["transfer"];
		$sql="UPDATE users set amount='$sum' WHERE name = '$to';";
		$result = mysqli_query($conn,$sql);
		$message="Successful transfer";
		echo"<script type='text/javascript'>alert('$message'); </script>";
   		 include 'index.html';

	}

	else
	
		{
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.html';
	}


?>

<!DOCTYPE html>
<html>
<head>
	


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>


</body>
</html>
