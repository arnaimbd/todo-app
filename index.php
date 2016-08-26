<?php 
require('classes/Crud.php' );			
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TODO 101</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

	<div class="container m-top-50">
		<div class="row">
			<div class="col-md-5">
				
				<h3>Add Task</h3>

				<div class="form">

					<form method="POST" action="insert-task.php">
					  	<div class="form-group">
					    	<label for="task">Task:</label>
					    	<input type="text" class="form-control" name="task">
					  	</div>


					    <div class="form-group">
						 	<label for="priority">Chose Priority:</label>
						  	<select class="form-control" name="priority">
						    	<option>Low</option>
						    	<option>Medium</option>
						    	<option>High</option>
						  	</select>
						</div>

					  	<div class="form-group">
					    	<label for="due-date">Due Date:</label>
					    	<input type="text" class="form-control" name="due-date">
					  	</div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>

				</div>

			</div> <!-- .col-md-6 -->

			<div class="col-md-7 m-top-50">

			  	<ul class="list-group">
			  	<li class="list-group-item active"> All Tasks </li>
				<?php 

					$sql = $crud->allTask();
					$queryResult = $crud->query( $connection, $sql );


					if ( !( $queryResult ) ) {

						$crud->error( $connection );
					
					} else {
					  	

					  	while ( $taskRow = mysqli_fetch_row($queryResult) )

					    { ?>
					   		<li class="list-group-item">

					   			<span class="badge">
					   				<a href="delete-task.php?id=<?php echo $taskRow[0]; ?>">Delete</a>
					   			</span>

					   			<span class="badge">
					   				<a href="edit-task.php?id=<?php echo $taskRow[0]; ?>">Edit</a>
					   			</span>

					   			Task Name: 
					   			<?php 
					   			if ( $taskRow[5] == true ) {
					   				echo '<span class="line-through">' . $taskRow[1] . '</span>';
					   			} else{
					   				echo '<span>' . $taskRow[1] . '</span>';
					   			}
					   			?> 

					   			<?php 
					   				if ( $taskRow[5] != true  ) {
					   					echo '<a href="edit-status.php?id='.$taskRow[0].'&status=0"><span class="tag tag-danger">Mark as completed</span></a>';
					   				}else{
					   					echo '<a href="edit-status.php?id='.$taskRow[0].'&status=1"><span class="tag tag-danger">Mark as uncompleted</span></a>';
					   				}

					   			 ?>
					   			<br/>

					   			<span class="text-muted">Priority: <?php echo $taskRow[2]; ?></span> <br>
					   			<span class="text-muted">Due Date: <?php echo $taskRow[3]; ?></span>

					   		</li>

					    <?php }


					  	mysqli_free_result( $queryResult );

					}
					
					echo '</ul>';

					$crud->closeConnection( $connection );
				 ?>
				
			</div>
			

		</div>
	</div>
</body>
</html>