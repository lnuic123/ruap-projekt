<?php
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$url = 'https://ussouthcentral.services.azureml.net/workspaces/59b1e6b2b4e74320856ebc7fc9db59ee/services/b9cbdbce35344c32a37d9895dd3dd099/execute?api-version=2.0&details=true';
$api_key = 'huxsmRIFSyyMsTZtO79srUvm9IZ82B2I5UcwFwcy0yXfgnlVjv2AZUi5yNSOrxPkEm/BhlmOMk48e1AI0J2gqQ==';
$fmargin = rand(1, 20);
$dribbles = rand(0, 7);
$ttime = rand(1, 5);
$data = array(
    'Inputs'=> array(
        'input1'=> array(
            'ColumnNames' => ['GAME_ID', 'MATCHUP', 'LOCATION', 'W', 'FINAL_MARGIN', 'SHOT_NUMBER', 'PERIOD', 'GAME_CLOCK', 'SHOT_CLOCK', 'DRIBBLES', 'TOUCH_TIME', 'SHOT_DIST', 'PTS_TYPE', 'SHOT_RESULT', 'CLOSEST_DEFENDER', 'CLOSEST_DEFENDER_PLAYER_ID', 'CLOSE_DEF_DIST', 'FGM', 'PTS', 'player_name', 'player_id'],
            'Values' => [ [ '','',$_POST['location'],0,(string)$fmargin,'',$_POST['period'],$_POST['gameclock'],$_POST['shotclock'],(string)$dribbles,'1.9',$_POST['shotdistance'],$_POST['pointstype'],'','','',$_POST['closedefdistance'],'','',$_POST['player'],'0' ],  ]
        ),
    ),
    'GlobalParameters' => new StdClass(),
);
$body = json_encode($data);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Bearer '.$api_key, 'Accept: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response  = json_decode(curl_exec($ch), true);
//echo 'Curl error: ' . curl_error($ch);
curl_close($ch);
var_dump ($response);
echo "<br>".$response["Results"]["output1"]["value"]["Values"][0][13];
$_SESSION["result"] = $response["Results"]["output1"]["value"]["Values"][0][13];
$conn = new mysqli("localhost", "root", "", "ruap");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO rez (location, winlose, period, gameclock, shotclock, shotdistance, pointstype, closedefdistance, player, result)
VALUES ('".$_POST['location']."', '".$_POST['winlose']."', '".$_POST['period']."','".$_POST['gameclock']."','".$_POST['shotclock']."','".$_POST['shotdistance']."','".$_POST['pointstype']."','".$_POST['closedefdistance']."','".$_POST['player']."', '".$_SESSION["result"]."'  )";
if ($conn->query($sql) === TRUE) {
	header( "Location: home.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
?>