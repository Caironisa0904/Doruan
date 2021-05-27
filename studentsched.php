<!DOCTYPE html>
<html>
<head>
	<title>STUDENT RESEARCH SCHEDULE</title>

<style type="text/css">

		#box{
			height: 565px;
			background-color: gray;
			margin: auto;
			width: 1300px;
			padding: 20px;
		}
	
	header{
			text-align: center; 
			margin: auto; 
			padding: 20px;
			
		}

		label, select {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  text-align: right;
  width: 400px;
  line-height: 26px;
  margin-bottom: 10px;
}

input {
  height: 20px;
  flex: 0 0 200px;
  margin-left: 10px;
}


	</style>


</head>

<body>

	
	<div id="box">
		

	<header>
	<h1>STUDENT RESEARCH SCHEDULE</h1>
	</header>


<form>
			<label>COURSE:
  			<select>
    			<option>Bachelor of Science in Information Technology</option>
    			<option>Bachelor of Science in Computer Science</option>
    			
  			</select></label>

  			<label>RESEARCH TITLE:
  			<input type="text"></label>

			<label>DATE OF DEFENSE:
  			<input type="date"></label>
			
			<label><input type="submit"></label>
	
		</form>
	</div>

</body>	
</html>