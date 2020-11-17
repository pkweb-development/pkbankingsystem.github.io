<?php
		include_once'try.inc.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
	<title>Users</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav mr-auto">
			<img src="https://image.flaticon.com/icons/png/512/66/66635.png" style="height: 50px;width: 60px">
			<li class="nav-item">
				<a class="nav-link" href="index.html" style="font-size: 30px; font-weight: bold;padding-right: 100px">Home</a>	
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#"style="font-size: 30px; font-weight: bold">Users<span class="sr-only">(current)</span></a>	
			</li>
			<li class="nav-item">
				<a class="nav-link" href="selectuser.php"style="font-size: 30px; font-weight: bold;padding-left: 100px">Transfer</a>
			</li>
		</ul>
		
	</nav>
<br><br>



<div style="text-align: center">
	
</div>
</form>
	<h2 style="text-align: center;color:black;font-size: 35px; font-family: Lucida Calligraphy;font-weight: bold"> List of Users </h2>
	<table  style="margin-left: auto;margin-right: auto;border-collapse: collapse;width: 70%">
		
		<tr style=" border: 1px solid #ddd;padding: 8px;">
			<th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: center;height: 50px;
  background-color: lightgreen;
  color: white;">User ID</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: center;
  background-color: lightgreen;
  color: white;">Name</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: center;
  background-color: lightgreen;
  color: white;">Email ID</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: center;
  background-color: lightgreen;
  color: white;">Amount</th>
		</tr>		

		<?php
			$sql="SELECT *FROM users;";
			$result = mysqli_query($conn,$sql);
				while ($row=$result->fetch_assoc()) {
			?>

			<form action="transfer.php" method="POST">
				<tr>

					
					<td style="text-align: center;font-size: 20px;"><?php echo $row['User_ID'];?> </td>
					<input type="hidden" name="name" value=<?php echo  $row['User_ID'];?>>
					<td style="text-align: center;font-size: 20px"><?php echo $row['name'];?> </td>
					<input type="hidden" name="name" value=<?php echo  $row['name'];?>>
					<td style="text-align: center;font-size: 20px"><?php echo $row['Email_ID'];?> </td>
					<input type="hidden" name="name" value=<?php echo  $row['Email_ID'];?>>
					<td style="text-align: center;font-size: 20px"><?php echo $row['amount'];?> </td>
					<input type="hidden" name="name" value=<?php echo  $row['amount'];?>>		
				</tr>
			</form>

			<?php

		}
		?>










		
			
	</table>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>



</body>
</html>  