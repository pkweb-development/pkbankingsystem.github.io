<?php
include_once'try.inc.php';
?>


<?php
session_start();
$name=$_POST['name'];
$sql="SELECT *FROM users WHERE name='$name';";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);
$_SESSION['name']=$name;
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="bank.css">
	<title>View User</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	<ul class="navbar-nav mr-auto">
		<img src="https://image.flaticon.com/icons/png/512/66/66635.png" style="width: 50px;height: 60px">
		<li class="nav-item active">
			<a class="nav-link" href="#" style="font-size: 30px; font-weight: bold;padding-right: 100px" >Home<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="new.php" style="font-size: 30px; font-weight: bold">Users</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="selectuser.php"style="font-size: 30px; font-weight: bold;padding-left: 100px">Transfer</a>
	</ul>
</nav>
<div class="view">
	<h2 style="text-align: center;font-size: 35px;font-family: Lucida Calligraphy;font-size: 35px;padding-top: 15px;font-weight: bold">User Information</h2>
	<table style="margin-left: auto;margin-right: auto;border-collapse: collapse;width: 70%">
		   <th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: left;height: 50px;
  background-color: lightgreen;
  color: white;">User_ID</th>
           <th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: left;height: 50px;
  background-color: lightgreen;
  color: white;">Name</th>
           <th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: left;height: 50px;
  background-color: lightgreen;
  color: white;">Email ID</th>
           <th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: left;height: 50px;
  background-color: lightgreen;
  color: white;">Amount</th>
           <tr style=" border: 1px solid #ddd;padding: 8px">
           <?php  
     
     $row=mysqli_fetch_assoc($result);
           ?>
  <td><?php echo  $row['User_ID']; ?></td>
  <td><?php echo  $row['name']; ?></td>
  <td><?php echo  $row['Email_ID']; ?></td>
  <td><?php echo  $row['amount']; ?></td>

           </tr>


        </table>
	
</div>
<br>

<div class="css-button">
	
	<div class="css-button-inner">
		<a href="view.php" style="text-decoration: none">
		<div class="reset-skew">
			 <p class="css-button-inner-text" style="text-align: center;font-size: 25px;font-weight: bold">Transfer To</p>
			
		</div></a>
	</div>
</div>
<br> <br> <br> <br> <br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>


</body>
</html>