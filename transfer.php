<?php

session_start();
include_once'try.inc.php';
$sql="SELECT *FROM users;";
$result = mysqli_query($conn,$sql);
$_SESSION['to']=$_POST["transfer"];
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	<title>Transfer</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <ul class="navbar-nav mr-auto">
    <img src="https://image.flaticon.com/icons/png/512/66/66635.png"  style="width: 50px;height: 60px">
    <li class="nav-item active">
      <a class="nav-link" href="#"style="font-size: 30px; font-weight: bold;padding-right: 100px">Home<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="new.php"style="font-size: 30px; font-weight: bold">Users</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="transfer.php"style="font-size: 30px; font-weight: bold;padding-left: 100px">Transfer</a>
  </ul>
</nav>



	<body>
     <form action="checkcr.php" method="post"  style="position: relative; top:20%; ">
          <div class="view">
              <strong style="padding: 690px; font-size: 20px">Enter Amount:</strong>
          <br>
            <br>
          <input type="text" name="transfer" style="margin-top: 5px;width: 10em;height: 2em;font-size: 15px;font-weight: bold;margin-left: 690px;background-color: #F8F8FF"><br>
          <br>

        
          <input type="submit" style="margin-top: 10px;width: 6em;height: 2em;font-size: 15px;font-weight: bold;margin-left: 670px">
          <input type="reset" name="reset" style="margin-top: 10px;width: 6em;height: 2em;font-size: 15px;font-weight: bold">

        
        
        </div>
        </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>