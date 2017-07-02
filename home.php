<?php
session_start();
/*
if(!isset($_SESSION['username'])){
    header('location:index.php');
}*/
if(!isset($_SESSION['result'])){
	$_SESSION["result"] = "";
	}
?>

<html>
<head>
	<title>NBA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	.images {margin-right: 12%; margin-bottom:5px;}
	.container {margin-left:0px; margin-right:0px; width:100%;}
	.jumbotron {margin-bottom: 0px; background-color:#fff;}
	.appName {margin-left:5%; display: inline;}
	.h2Inline {display: inline; margin-left: 5%;}
	.h3Inline {display: inline; margin-left: 1%; color: #777;}
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }
  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }
  tr:nth-child(even) {
      background-color: #dddddd;
  }
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 15px;
}
input[type=number] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
}
input[type=time] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 15px;
}
form{
  font-size: 15px;
  font-family: Tahoma, Geneva, sans-serif;
}
input[type=range] {
  -webkit-appearance: none;
  width: 100%;
  margin: 8.3px 0;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: rgba(0, 0, 0, 0);
  border-radius: 1.3px;
  border: 0.2px solid rgba(0, 255, 1, 0.35);
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1.9px 1.9px 1px #000000, 0px 0px 1.9px #0d0d0d;
  border: 4.1px solid #00be00;
  height: 25px;
  width: 0px;
  border-radius: 0px;
  background: #000a00;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -8.5px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: rgba(13, 13, 13, 0);
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  background: rgba(0, 0, 0, 0);
  border-radius: 1.3px;
  border: 0.2px solid rgba(0, 255, 1, 0.35);
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1.9px 1.9px 1px #000000, 0px 0px 1.9px #0d0d0d;
  border: 4.1px solid #00be00;
  height: 25px;
  width: 0px;
  border-radius: 0px;
  background: #000a00;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 8.4px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: rgba(0, 0, 0, 0);
  border: 0.2px solid rgba(0, 255, 1, 0.35);
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-fill-upper {
  background: rgba(0, 0, 0, 0);
  border: 0.2px solid rgba(0, 255, 1, 0.35);
  border-radius: 2.6px;
  box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
}
input[type=range]::-ms-thumb {
  box-shadow: 1.9px 1.9px 1px #000000, 0px 0px 1.9px #0d0d0d;
  border: 4.1px solid #00be00;
  height: 25px;
  width: 0px;
  border-radius: 0px;
  background: #000a00;
  cursor: pointer;
  height: 8.4px;
}
input[type=range]:focus::-ms-fill-lower {
  background: rgba(0, 0, 0, 0);
}
input[type=range]:focus::-ms-fill-upper {
  background: rgba(13, 13, 13, 0);
}
  </style>


</head>
<body>
    <div class="container">
    </div>

	<div class="jumbotron" style="text-align: center;">
	<div class="appName">
	<h1 class="h2Inline">BASKETBALL SHOT PREDICTION</h1>
	<img src="nba.png" class="img-rounded images" width="100" height="100">
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
     </button>
	 <div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
      <li ><a>Welcome <?php //echo $_SESSION['username']; ?></a></li>
		  <li class="active"><a href="#">Home</a></li>
		  <li><a href="anderson.php">Alan Anderson</a></li>
		  <li><a href="james.php">LeBron James</a></li>
		  <li><a href="curry.php">Stephen Curry</a></li>
		  <li><a href="bryant.php">Kobe Bryant</a></li>
		  <li><a href="roberts.php">Brian Roberts</a></li>
		  <li><a href="young.php">Nick Young</a></li>
		  <li><a href="anthony.php">Carmelo Anthony</a></li>
		  <li><a href="durant.php">Kevin Durant</a></li>
      <li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
  </div>
</nav>
<div class="col-sm-1">
</div>
<div class="col-sm-3">
<form action="check.php" method="POST">
  Location(H/A):<br>
    	<select name="location">
	  <option value="H">Home</option>
	  <option value="A">Away</option>
	</select>
  <br>
  Shot clock:<br>
  <input type="number" name="shotclock" min="0" max="24"  value="10">
  <br>
  Period:<br>
  <input type="range" name="period" min="1" max="4" value="1" step="1" onchange="showValue1(this.value)" style="width: 50%;"/>
  <span id="range1">1</span>
  <br>
    Points type:<br>
   <input type="radio" id="radio2" name="pointstype" value="2" onchange="changeinput2()"> 2
  <input type="radio" id="radio3" name="pointstype" value="3"  onchange="changeinput3()" checked> 3<br>
  <br>
  Shot distance:<br>
  <input type="number" id="shotdistance" name="shotdistance" min="0" max="94" value="22" onchange="checkradio(this.value)">
  <br>
  Game clock:<br>
  <input type="time" name="gameclock" min="0:00" max="12:00" id="myTime" value="2:03">
  <br>

  Close defender distance:<br>
  <input type="number" name="closedefdistance" min="0" max="20" step="0.1" value="2.6">
  <br>

  <script type="text/javascript">
  $( document ).ready(function() {
    document.getElementById("myTime").value = "04:26";
});
  radiobtn2 = document.getElementById("radio2");
  radiobtn3 = document.getElementById("radio3");
  shotd = document.getElementById("shotdistance");
  function changeinput2(){
    if(shotd.value > 21){
      shotd.value = 21;
    }
  }
  function changeinput3(){
    if(shotd.value <= 21){
      shotd.value = 22;
    }
  }
  function checkradio(newValue){
    if(newValue < 22){
      radiobtn2.checked = true;
    }
    else if(newValue >= 22){
      radiobtn3.checked = true;
    }
  }
  function showValue(newValue)
  {
    document.getElementById("range").innerHTML=newValue;
  }
  function showValue1(newValue)
  {
    document.getElementById("range1").innerHTML=newValue;
  }
  function showValue2(newValue)
  {
    document.getElementById("range2").innerHTML=newValue;
  }
  </script>
  <div class="dropdown">

  <br>
  	<select name="player">
	  <option value="alan anderson">Alan Anderson</option>
	  <option value="stephen curry">Stephen Curry</option>
	  <option value="lebron james">Lebron James</option>
	  <option value="brian roberts">Brian Roberts</option>
	  <option value="kobe bryant">Kobe Bryant</option>
	  <option value="nick young">Nick Young</option>
	  <option value="carmelo anthony">Carmelo Anthony</option>
	  <option value="kevin durant">Kevin Durant</option>
	</select>
  <input type="submit" value="Submit">
  <br>
</form> 
</div>	
</div>
<div class="col-sm-5">
<table>
  <tr>
    <th>Player name</th>
    <th>Location</th>
    <th>Shot clock</th>
    <th>Period</th>
    <th>Shot distance</th>
    <th>Game clock</th>
    <th>Points type</th>
    <th>Close defender distance</th>
    <th>Result</th>
    <th></th>
  </tr>
  <?php
      $con = mysqli_connect('localhost','root','','ruap');
        if (!$con) {
            die('Could not connect: ' . mysqli_error($con));
        }
        $sql="SELECT * FROM rez";
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($result)) {
                  echo '<tr>';
                  echo '<td>'.$row['player'].'</td>';
                  echo '<td>'.$row['location'].'</td>';
                  echo '<td>'.$row['shotclock'].'</td>';
                  echo '<td>'.$row['period'].'</td>';
                  echo '<td>'.$row['shotdistance'].'</td>';
                  echo '<td>'.$row['gameclock'].'</td>';
                  echo '<td>'.$row['pointstype'].'</td>';
                  echo '<td>'.$row['closedefdistance'].'</td>';
                  echo '<td>'.$row['result'].'</td>';
                  echo "<td><a href=\"delrow.php?id=".$row['id']."\">Delete</a></td>";
                  echo '</tr>';
        }
?>
</table>

</div>
</body>
</html>