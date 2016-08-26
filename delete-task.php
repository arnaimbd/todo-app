<?php 

	require('includes/Crud.php' );


	if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {
		
		$taskId = $_GET['id'];
		$sql = $crud->deleteTask( $taskId );
		
		if ( !$crud->query( $connection, $sql ) ) {
			$crud->error( $connection );
		} else {
			echo 'Task deleted successfully';
		}

		$crud->closeConnection( $connection );

		header("Location: index.php");

	} else {
		echo 'Something wrong, Ex. ID is missing';
	}


 ?>