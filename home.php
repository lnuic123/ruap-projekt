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

</head>
<body>
    <div class="container">
    </div>

	<div class="jumbotron" style="text-align: center;">
	<div class="appName">
	<h1 class="h2Inline">NBA</h1>
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
		  <li><a href="anderson.html">Alan Anderson</a></li>
		  <li><a href="james.html">LeBron James</a></li>
		  <li><a href="curry.html">Stephen Curry</a></li>
		  <li><a href="bryant.html">Kobe Bryant</a></li>
		  <li><a href="roberts.html">Brian Roberts</a></li>
		  <li><a href="young.html">Nick Young</a></li>
		  <li><a href="anthony.html">Carmelo Anthony</a></li>
		  <li><a href="durant.html">Kevin Durant</a></li>
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
  <!--
  Win/Lose:<br>
    	<select name="winlose">
	  <option value="W">Win</option>
	  <option value="L">Lose</option>
	</select>
  <br>
  -->
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
    <th>Win/Lose</th>
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
                  echo '<td>'.$row['winlose'].'</td>';
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