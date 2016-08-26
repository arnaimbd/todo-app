<?php 

	require('classes/Crud.php' );


	$taskName = htmlspecialchars( $_POST['task'] );
	$priority = htmlspecialchars( $_POST['priority'] );
	$dueDate  = $_POST['due-date'];
	

	if ( !empty( $taskName && $priority && $dueDate ) ) {

		$sql = $crud->addTask( $taskName, $priority, $dueDate );


		if ( !$crud->query( $connection, $sql ) ) {
			$crud->error( $connection );
		} else {
			echo 'Task added successfully';
		}

		$crud->closeConnection( $connection );
		
		header("Location: index.php");

	} else {
		echo 'Every information is mandatory';
	}


 ?>