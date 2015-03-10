<?php require 'game.action.php'; ?>
<!DOCTYPE HTML>

<html>
	<head>
		<link href = "style.css" rel = "stylesheet" type = "text.css">
	</head>

	<body>
		<div class="game_container">
		<h1 class="game">Metacritic</h1>
		<div class="game_box">
			<h1 class="GameName"><?= $row['game_name'] ?></h1><br>
			<ul>
				<li>Platform: <?= $row['platform']?></li><br>
				<li>Ontwikkelaar: <?= $row['developer_name']?></li><br>
				<li>Uitgever: <?= $row['publisher_name']?></li><br>
			<ul>
		</div>
			<?php	
				foreach($reviews as $review){
			?>
				<p class = "review"><br>
							<ul>
								<li><?= $review['website_name']?></li><br>
								<li><?= $review['grade']?>/100</li><br>
								<li><?= $review['description']?></li><br>
								<li><a href="<?= $review['review_url']?>">Lees meer</a></li><br>
							</ul>
				<p>
			<?php
				}
			?>
		</div>
	</body>
</html>