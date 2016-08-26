<?php 

class Crud
{

	public $connected;


	public function connection( $host, $user, $pass, $dbName )
	{
		$connection = mysqli_connect( $host, $user, $pass, $dbName );

		if ( $connection ) {
			$this->connected = true;
		}

		return $connection;
	}


	public function addTask( $task, $priority, $dueDate )
	{
		$sql = "INSERT INTO tasks ( name, priority, dueDate ) VALUES ( '$task', '$priority', '$dueDate' )";	

		return $sql;
	}


	public function deleteTask( $taskId )
	{
		$sql = "DELETE FROM tasks WHERE id = $taskId";

		return $sql;
	}

	public function updateTask( $taskId, $task, $priority, $dueDate )
	{
		$sql = "UPDATE tasks SET name = '$task', priority = '$priority', dueDate = '$dueDate' WHERE id = $taskId ";	

		return $sql;
	}

	public function updateTaskStatus( $taskId, $taskStatus )
	{
		$sql = "UPDATE tasks SET status = '$taskStatus' WHERE id = $taskId ";	

		return $sql;

	}


	public function allTask( $taskId = '' )
	{
		$sql = '';

		if ( !empty( $taskId ) ) {
			$sql = "SELECT * FROM tasks WHERE id = $taskId ";
		} else {
			$sql = "SELECT * FROM tasks";	
		}

		return $sql;
	}


	public function query( $conection, $sql )
	{
		return mysqli_query( $conection, $sql );
		
	}


	public function error( $conection )
	{
		echo("Error description: " . mysqli_error( $conection ) );
	}


	public function closeConnection( $connection )
	{
		return mysqli_close( $connection );
		$this->connected = false;

	}

}

$crud = new Crud;
$connection = $crud->connection( 'localhost', 'root', 'root', 'todo101' );