<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Task - TODO 101</title>
</head>
<body>

	<div class="container">
		<div class="row">
			
			<form method="POST" action="insert.php">
				<label for="task">Task:</label> <br>
				<input type="text" name="task"> <br>

				<label for="priority">Priority:</label> <br>
				<input type="text" name="priority"> <br>

				<label for="due-date">Due Date:</label> <br>
				<input type="text" name="due-date"> <br>

				<input type="submit" value="Submit">
			</form>

		</div>
	</div>
	
</body>
</html>

