<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<link href = "style.css" rel = "stylesheet" type = "text.css">
	</head>

	<body>
		<?php
			$query = "select game.name as game_name, platform, developer.name as developer_name, publisher.name as publisher_name, grade, description, website.url as website_url, website.name as website_name from game left join publisher on game.publisher_id = publisher.id left join developer on game.developer_id = developer.id left join review on review.game_id = game.id left join website on review.website_id = website.id where game.id =".$_GET['id'].";";

			$result = $connection->query($query);
			$rows = $result->fetch_all(MYSQLI_ASSOC);
			foreach($rows as $row)
			{
				echo "<h1 class = 'game'>".$row['game_name']."</h1><br>
				<ul>
					<li>Platform: ".$row['platform']."</li><br>
					<li>Ontwikkelaar: ".$row['developer_name']."</li><br>
					<li>Uitgever: ".$row['publisher_name']."</li><br>
				<ul>";

				echo "<p class = 'review'><br>
						<ul>
							<li>".$row['website_name']."</li><br>
							<li>".$row['grade']."/100</li><br>
							<li>".$row['description']."</li><br>
							<li><a href='".$row['website_url']."'>Lees meer</a></li><br>
						</ul>
					<p>";
			}
		?>
	</body>
</html>