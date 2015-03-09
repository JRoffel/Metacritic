<?php require 'index.action.php' ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Metacritic</title>
		<link type = "text/css" rel = "stylesheet" href = "style.css">
	</head>

	<body>
		<div class="content">
			<h1 class="Index">Metacritic</h1>
			<h2>Spellen</h2>

			<table>
				<?php
					foreach($games as $game){   
				?>
	
					<ul>
						<li class="link"><?= "<a href = game.php?id=".$game['game_id'].">".$game['game_name']."</a>"?></li>
					</ul>


				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>