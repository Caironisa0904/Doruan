<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>SUBMIT</title>
</head>
<body>

	<style type="text/css">

		#text{
			height: 100px;
			border-radius: 20px;
			padding: 20px;
			border: solid thin #aaa;
			width: 200%;
		}

		#button{
			padding: 50px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}

		#box{
			height: 565px;
			background-color: lightblue;
			margin: auto;
			width: 500px;
			padding: 20px;
		}

	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 40px; margin: 40px; text-align: center; color: black">SUBMIT</div>
			<label>Course</label><br><br>
			<input placeholder="Course"><br><br>
			<label>Research Title</label><br><br>
			<input placeholder="Research Title"><br><br><br>
			<a href="studentsched.php">Submit</a>

		</form>
	</div>

</body>	
</html>

<?php 
}else{
	header("Location: index.php");
	exit();
}

?>	