<?php
	$connection = new mysqli('localhost', 'root', '', 'metacritic');
?>
<!DOCTYPE HTML>

<html>
	<head>
		<link href = "style.css" rel = "stylesheet" type = "text.css">
	</head>

	<body>
		<div class="game_container">
		<h1 class="game">Metacritic</h1>
		<div class="game_box">

			<?php
				$query = "select game.name as game_name, platform, developer.name as developer_name, publisher.name as publisher_name from game left join publisher on game.publisher_id = publisher.id left join developer on game.developer_id = developer.id where game.id =".$_GET['id'].";";

				$result = $connection->query($query);
				$rows = $result->fetch_all(MYSQLI_ASSOC);
				foreach($rows as $row)
				{
					echo "<h1 class='GameName'>".$row['game_name']."</h1><br>
					<ul>
						<li>Platform: ".$row['platform']."</li><br>
						<li>Ontwikkelaar: ".$row['developer_name']."</li><br>
						<li>Uitgever: ".$row['publisher_name']."</li><br>
					<ul>";
				} ?>
		</div>
			<?php	
				$review_query = "select grade, description, review.url as review_url, website.name as website_name from review left join game on review.game_id = game.id left join website on review.website_id = website.id where game.id =".$_GET['id'].";";

				$review_result = $connection->query($review_query);
				$reviews = $review_result->fetch_all(MYSQLI_ASSOC);
				foreach($reviews as $review){
					echo "<p class = 'review'><br>
							<ul>
								<li>".$review['website_name']."</li><br>
								<li>".$review['grade']."/100</li><br>
								<li>".$review['description']."</li><br>
								<li><a href='".$review['review_url']."'>Lees meer</a></li><br>
							</ul>
						<p>";
				}
			?>
		</div>
	</body>
</html>