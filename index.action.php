<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
	$query = "select * from game";
	$result = $connection->query($query);
	$games = $result->fetch_all(MYSQLI_ASSOC);
?>