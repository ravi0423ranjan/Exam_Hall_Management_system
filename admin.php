 <!doctype html>
 <html>
 <head>
 <style>
 body{background-color:lavender;}
 .admin{border:2px solid black;
                padding:20px;
				width:450px;
				top:85px;
				left:450px;
				position:absolute;
                background-color:lavenderblush;}
 </style>
 </head>
 <body>
 <div class="admin">
 <a href="project.html">Home</a>
 <form id="login" action="" method="post">
	    Roll number:<input style="width:170px;"type="text" name="roll"/>
		</br>
		</br>
		Room number:<input style="width:160px;"type="text" name="room"/>
		</br>
		</br>
		Paper code:<input style="width:180px;" type="text" name="code"/>
		</br>
		</br>
		Date:<input style="width:222px;" type="date" name="date"/>
		</br>
		</br>
		Trade:<input style="width:220px;"type="text" name="trade"/>
		</br>
		</br>
		<input type="submit" name="admin" value="submit"/>
		</form>
 </div>	
 </body>
 </html>
		<?php
		include ('dbconnect.php');
		if(isset($_POST['admin'])){
			$roll=$_POST['roll'];
			$room=$_POST['room'];
			$code=$_POST['code'];
			$dates=$_POST['date'];
			$trade=$_POST['trade'];
			
			$query="insert into admins(id,roll,room,code,date,trade) values('NULL','$roll','$room','$code','$dates','$trade')";
			$run=mysqli_query($con,$query);
			if($run){
				echo "<script>alert('successfully added!');</script>";
			}
			
		}
		?>