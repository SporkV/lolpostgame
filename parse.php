<?PHP
require ('apikey.php');
//get LoL postgame stuff
	$name = $_POST['name'];
	$region = $_POST['region'];
	$lowerName = strtolower($name);
//get summonerID
$url = 'https://' . $region . '.api.pvp.net/api/lol/' . $region . '/v1.4/summoner/by-name/' . $name . '?api_key=' . $apikey;
$idcontent = file_get_contents($url);
$idjson = json_decode($idcontent, true);

foreach ($idjson as $key => $value) { 
    foreach ($value as $k => $v) { 
        if ($k == "id") {
        	$summonerID = $v;
        }
    }
}
print($summonerID);

//get match history
$url = 'https://' . $region . '.api.pvp.net/api/lol/' . $region . '/v2.2/matchhistory/' . $summonerID . '?api_key=' . $apikey;
$content = file_get_contents($url);
$json = json_decode($content, true);

print($content);


?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

</body>
</html>