<!DOCTYPE html>
<html>
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
  <title>Kevin Durant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <style>
    p.outset {border-style: outset;}
   
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #dddddd;
      color: white;
      padding: 10px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  
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
		  <li><a href="home.php">Home</a></li>
		   <li><a href="anderson.php">Alan Anderson</a></li>
		    <li><a href="james.php">LeBron James</a></li>
			<li><a href="curry.php">Stephen Curry</a></li>
		  <li><a href="bryant.php">Kobe Bryant</a></li>
		  	<li><a href="roberts.php">Brian Roberts</a></li>
		  <li><a href="young.php">Nick Young</a></li>
		   <li><a href="anthony.php">Carmelo Anthony</a></li>
		   <li class="active"><a href="#">Kevin Durant</a></li>
      <li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
  </div>
</nav>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Kevin Durant</h4>
	  <img src="durant.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: F</p>
			  <li><span>BORN: </span><span class="outset">09/29/1988
			  </span></li><li><span>HEIGHT: </span><span>6ft9in/2.06m
			  </span></li><li><span>WEIGHT: </span><span>240 lbs/108.9 kg
              </span></li><li><span>AGE: </span><span>28 years
              </span></li><li><span>FROM: </span><span>Texas
              </span></li><li><span>NBA DEBUT: </span><span>2007
              </span></li><li><span>YEARS IN NBA: </span><span>9
   </span></li><li><span>PREVIOUSLY: </span><span><p><strong>GSW</strong> 2016-17</p><p><strong>OKC</strong> 2007-16</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 97</small></h4>
      <hr>
	  <img src="durant_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Professional History</h4>
			 <h4>2CAREER AVERAGES</h4>

<br><br>
<br>Appeared in 542 games (542 starts) and averaged 27.4 points, 6.9 rebounds, 2.5 assists, 1.3 steals and 1.0 blocks in 38.2 minutes. 
<br><br>
<h4>CAREER ALL-STAR </h4>
<br>Named to his fifth career NBA Western Conference All-Star team (named starter for fourth time in career) during the 2013-14 season after leading all Western Conference players with a total of 1,396,294 votes.
2013-14: Scored a game-high 38 points on 14-27 shooting alongside 10 rebounds, six assists and one steal in 35 minutes at Smoothie King Center in New Orleans. 
2012-13: Scored a game-high 30 points on 13-24 shooting alongside six rebounds, two steals and one assist to help the West top the East 143-138 at Toyota Center in Houston, Texas.
2011-12: Received MVP honors after scoring a game- high 36 points on 14-of-25 shooting. With a career All- Star scoring average of 28. 3 points per game, Kevin Durant is the game's all-time leader in points per game (minimum three appearances).
2010-11: In the game at STAPLES Center in Los Angeles, Durant scored 34 points in 30 minutes of action. He was named to the starting lineup after receiving the second most votes in the Western Conference.
2009-10: Became the first All-Star in Oklahoma City Thunder history and in the game played at Dallas Cowboys Stadium in Arlington, TX, scored 15 points and grabbed five rebounds.
<br><br>
<h4>U-S-A:</h4>
<br>Won a gold medal as a member of Team USA during the 2012 Olympics in London. Set a USA Basketball Olympic record by scoring 156 points in a single Olympic games. In eight games (all starts), registered averages of 19.5 points and 5.8 rebounds in 26.0 minutes per game. During the summer of 2010 Durant helped lead the USA Men's National Team to a gold medal during the 2010 FIBA World Championships played in Turkey. Durant, the tournament MVP recorded a game-high 28 points during the United States' gold medal winning, 81-64 victory over host country Turkey. He also set the all-time USA single game scoring record by notching 38 points during the USA's semifinal match-up versus Lithuania. 
<br><br>
<h4>PERSONAL:</h4>
<br>Wears No. 35 to honor his childhood AAU coach, Charles Craig, who died when he was 35. Favorite food is crab legs. Most admired Vince Carter as a child. Loves to play video games (NBA Live and March Madness) and shopping for clothes. Favorite motto, which his mentor and coach Taras Brown recited when Kevin was working out, is: 'Hard work beats talent when talent fails to work hard.' 

<br><br>
</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
