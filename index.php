<?php

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Postgame Info - Lookup</title>
	<link rel="stylesheet" type="text/css" href="lookup.css" />
</head>
<body>
	<div id="wrapper">
		<h3>Summoner Lookup</h3>
		<form method="post" action="parse.php">
			<input name="name" id="name" size="50" placeholder="Summoner Name" />
			<select id="region" name="region">
				<option value="na">North America</option>
				<option value="euw">EU West</option>
				<option value="eune">EU North/East</option>
				<option value="oce">Oceania</option>
				<option value="br">Brazil</option>
				<option value="kr">Korea</option>
				<option value="lan">Latin America North</option>
				<option value="las">Latin America South</option>
				<option value="tr">Turkey</option>
				<option value="ru">Russia</option>
			</select>
            <input type="submit" value="Go!" />
        </form>
    </div>
    <div id="footer">
    	<h5>LoLPostgame isn’t endorsed by Riot Games and doesn’t reflect the views or opinions of Riot Games or anyone officially involved in producing or managing League of Legends. League of Legends and Riot Games are trademarks or registered trademarks of Riot Games, Inc. League of Legends © Riot Games, Inc.</h5>
    </div>
</body>
</html>