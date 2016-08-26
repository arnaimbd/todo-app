<?php 

	require('classes/Crud.php' );

	if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] )  ) {

		$taskId      = $_GET['id'];
		$sql         = $crud->allTask( $taskId );
		$queryResult = $crud->query( $connection, $sql );

		if ( !( $queryResult ) ) {

			$crud->error( $connection );
		
		} else {

			while ( $taskRow = mysqli_fetch_row( $queryResult ) )
			{
				$taskName = $taskRow[1];
				$priority = $taskRow[2];
				$dueDate  = $taskRow[3];
				
			}

		}
		
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Edit Task</title>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
 </head>
 <body>

 	<div class="container m-top-100">
 		<div class="row">
 			<div class="col-md-6 col-md-offset-3">

	 			<?php if ( !empty($_POST) ) {

	 				$updatedTaskName = htmlspecialchars( $_POST['task'] );
					$updatedPriority = htmlspecialchars( $_POST['priority'] );
					$updatedDueDate  = $_POST['due-date'];
					

					if ( !empty( $updatedTaskName && $updatedPriority && $updatedDueDate ) ) {

						$sql = $crud->updateTask( $taskId, $updatedTaskName, $updatedPriority, $updatedDueDate );


						if ( !$crud->query( $connection, $sql ) ) {
							$crud->error( $connection );
						}

						$crud->closeConnection( $connection );
						
						header("Location: index.php");

					} else {
						echo 'Every information is mandatory';
					}

	 			} else { ?>

		 			<form method="POST" action="">
					  	<div class="form-group">
					    	<label for="task">Task:</label>
					    	<input type="text" class="form-control" name="task" value="<?php echo $taskName; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="priority">Priority:</label>
					    	<input type="text" class="form-control" name="priority" value="<?php echo $priority; ?>">
					  	</div>

					  	<div class="form-group">
					    	<label for="due-date">Due Date:</label>
					    	<input type="text" class="form-control" name="due-date" value="<?php echo $dueDate; ?>">
					  	</div>

					  <button type="submit" class="btn btn-default">Submit</button>
					</form>

				<?php } ?>

			</div>

 		</div>
 	</div>
 	
 </body>
 </html>