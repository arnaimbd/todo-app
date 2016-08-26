<?php 

	require('classes/Crud.php' );


	if ( isset( $_GET['id'] ) && is_numeric( $_GET['id'] ) ) {
		
		$taskId     = $_GET['id'];
		echo $taskStatus = htmlspecialchars( $_GET['status'] );

		if ( $taskStatus == 1 ) {
			$taskStatus = 0;
		} else {
			$taskStatus = 1;
		}

		$sql = $crud->updateTaskStatus( $taskId, $taskStatus );
		
		if ( !$crud->query( $connection, $sql ) ) {
			$crud->error( $connection );
		} 

		$crud->closeConnection( $connection );

		header("Location: index.php");

	} else {
		echo 'Something wrong, Ex. ID is missing';
	}


 ?>