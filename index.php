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
				<tr>
					<td><?= "<a href = game.php?id=".$game['game_id'].">".$game['game_name']."</a>"?></td>
				</tr>

				<ul>
					<li>platform: <?= $game['platform']?></li>
					<li>developer: <?= $game['developer_name']?></li>
					<li>publisher: <?= $game['publisher_name']?></li>
				</ul>

				<?php
					}
				?>
			</table>
		</div>
	</body>
</html>