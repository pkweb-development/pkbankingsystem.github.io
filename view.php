<?php
		session_start();

		
			include_once'try.inc.php';
?>

<?php
$name1=$_SESSION['name'];
$sql="SELECT *FROM users WHERE not name ='$name1';";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="bank.css">
	
	<title>View user</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav">
			<img src="https://image.flaticon.com/icons/png/512/66/66635.png" style="height: 50px;width: 60px">
			<li class="nav-item">
				<a class="nav-link" href="index.html"style="font-size: 30px; font-weight: bold;padding-right: 100px">Home</a>	
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#" style="font-size: 30px; font-weight: bold">Users<span class="sr-only">(current)</span></a>	
			</li>
			<li class="nav-item">
				<a class="nav-link" href="transfer.php"style="font-size: 30px; font-weight: bold;padding-left: 100px">Transfer</a>
			</li>
		</ul>		
	</nav>

	<div class="view">
		<h2 style="text-align: center;font-size: 35px;font-family: Lucida Calligraphy;font-size: 35px;padding-top: 15px;font-weight: bold">Choose user to tranfer</h2>
		<form action="transfer.php" method="POST">
			<table>
				<th><h4 style="padding-left: 35px;background-color:#DCDCDC;font-family: Lucida Calligraphy">Users</h4></th>
				<?php

				while($row = $result->fetch_assoc()) { 
					?>

        
   <tr>
       <td > <input type="radio" name="transfer" style="margin-left: 50px"  value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>

  <tr>
          
           <td><input type="submit" style="font-size: 15px;margin-left: 150px" value="Pay now"></td>
           </tr>
        </div>

		</table>
			
		</form>
		
	</div>



	



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>



