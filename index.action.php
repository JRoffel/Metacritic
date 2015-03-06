<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
	$query = "select platform, game.name as game_name, game.id as game_id, developer.name as developer_name, publisher.name as publisher_name from game left join developer on game.developer_id = developer.id left join publisher on game.publisher_id = publisher.id";
	$result = $connection->query($query);
	$games = $result->fetch_all(MYSQLI_ASSOC);
?>