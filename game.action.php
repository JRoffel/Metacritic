<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');

	$query = "select game.name as game_name, platform, developer.name as developer_name, publisher.name as publisher_name from game left join publisher on game.publisher_id = publisher.id left join developer on game.developer_id = developer.id where game.id =".$_GET['id'].";";

	$result = $connection->query($query);
	$rows = $result->fetch_all(MYSQLI_ASSOC);
	$row = $rows[0];

	$review_query = "select grade, description, review.url as review_url, website.name as website_name from review left join game on review.game_id = game.id left join website on review.website_id = website.id where game.id =".$_GET['id'].";";

	$review_result = $connection->query($review_query);
	$reviews = $review_result->fetch_all(MYSQLI_ASSOC);
?>