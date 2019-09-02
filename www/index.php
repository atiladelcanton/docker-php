<?php
	try {
        $conn = new PDO( 'mysql:host=db;dbname=teste', 'root', '123456');
		$sql = 'SELECT * FROM usuarios';
 
		foreach( $conn->query( $sql ) as $row ) {
			echo '<li>' . $row['nome'] . '</li>';
		}
 
		$conn = null;
 
	} catch (PDOException $e) {
		echo "Erro!: " . $e->getMessage() . "<br/>";
		die();
	}    
?>  
