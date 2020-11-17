<?php
		include_once'try.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="bank.css">
	<title>Select User</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav mr-auto">
			<img src="https://image.flaticon.com/icons/png/512/66/66635.png" style="height: 50px;width: 60px">
			<li class="nav-item">
				<a class="nav-link" href="index.html"style="font-size: 30px; font-weight: bold;padding-right: 100px">Home</a>	
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="new.php"style="font-size: 30px; font-weight: bold">Users</a>	
			</li>
			<li class="nav-item">
				<a class="nav-link" href="transfer.php" style="font-size: 30px; font-weight: bold;padding-left: 100px">Transfer<span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</nav>

<form action="userdetail.php" method="POST">
	<h2 style="text-align: center;font-size: 35px;font-family: Lucida Calligraphy;font-size: 35px;padding-top: 15px">Select from list</h2>
	<table style="margin-left: auto;margin-right: auto;border-collapse: collapse;width: 70%">
		<tr style=" border: 1px solid #ddd;padding: 8px;">
			<th style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px; font-size: 30px;
  text-align: left;height: 50px;
  background-color: lightgreen;
  color: white;">User ID</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: left;
  background-color: lightgreen;
  color: white;">Name</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: left;
  background-color: lightgreen;
  color: white;">Email ID</th>
			<th  style="text-align: center;padding-top: 12px;
  padding-bottom: 12px; padding-right: 50px;font-size: 30px;
  text-align: left;
  background-color: lightgreen;
  color: white;">Amount</th>
		</tr>		
		<?php
		$sql="SELECT *FROM users;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" .$row['User_ID']."</td>";
				echo "<td>" .$row['name']."</td>";
				echo "<td>" .$row['Email_ID']."</td>";
				echo "<td>" .$row['amount']."</td>";
				echo "</tr>";
			
		}
	?>

	 <div class="view">
	 	<table cellspacing=50px style="position: relative; left: 40%;width: 70px">
  	<tr>
      <h4 style="text-align: left;font-family: Lucida Calligraphy; padding-left: 20px;text-decoration: blink" >Select User</h4>
   
	</tr>

	<?php
		$sql="SELECT *FROM users;";
		$result = mysqli_query($conn,$sql);
	?>

	<select name="name" onchange="this.form.submit()" style="width: 200px">
      <option style="text-align: center">---------Select---------</option>

      <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>
       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</form>
</body>
</html>

