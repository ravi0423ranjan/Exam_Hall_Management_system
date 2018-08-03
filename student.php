<!doctype html>
<html lang="en">
<head>
<title>login or signup</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body{background-color:lavender;}
.administration{border:2px solid black;
                padding:20px;
				width:450px;
				top:85px;
				left:450px;
				position:absolute;
				background-color:lavenderblush;}
</style>
</head>
<body>
    <h1 style="text-align:center; font-size:50px; color:black;">Login</h1>
 
		<div style="text-align:center;">
		<div class="administration">
		 <h2 style="text-decoration:underline; text-align:center;">For Administration</h2>
	   <h3 style="text-align:center;">login</h3>
	   <form action="" method="post">
	    Username:<input style="width:190px;"type="text" name="username"/>
		</br>
		</br>
		Password:<input style="width:190px;"type="password" name="pass"/>
		</br>
		</br>
		<input type="submit" name="entry" value="submit"/>
		</br>
		</form>
		</div>
		</div>
		<div style="top:500px; left:660px; position:absolute;">
	     </div>
		 </div>

		 
</body>
</html>
<?php
if(isset($_POST['entry'])){
	$username=$_POST['username'];
	$pass=$_POST['pass'];
	if($username=="admin" && $pass=="admin"){
		header('Location:admin.php');
	}else{echo "<script>alert('Invalid Input');</script>";
}
}
?>


