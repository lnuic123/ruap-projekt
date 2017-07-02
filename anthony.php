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
  <title>Carmelo Anthony</title>
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
		   <li class="active"><a href="#">Carmelo Anthony</a></li>
		  <li><a href="durant.php">Kevin Durant</a></li>
      <li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
  </div>
</nav>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Carmelo Anthony</h4>
	  <img src="anthony.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: F</p>
			  <li><span>BORN: </span><span class="outset">05/29/1984
			  </span></li><li><span>HEIGHT: </span><span>6ft8in/2.03m
			  </span></li><li><span>WEIGHT: </span><span>240 lbs/108.9 kg
              </span></li><li><span>AGE: </span><span>33 years
              </span></li><li><span>FROM: </span><span>Syracuse
              </span></li><li><span>NBA DEBUT: </span><span>2003
              </span></li><li><span>YEARS IN NBA: </span><span>13
   </span></li><li><span>PREVIOUSLY: </span><span><p><strong>NYK</strong> 2010-17</p><p><strong>DEN</strong> 2003-11</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 97</small></h4>
      <hr>
	  <img src="anthony_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Professional History</h4>
			 <h4>2013-14 SEASON:</h4>

<br><br>
<br>Earned seventh career NBA All-Star berth with yet another season of headline performances befitting status as one of the game’s elite players...Finished second in the NBA in scoring (27.4) while leading the League in minutes (38.7)...Over 77 games (all starts), Carmelo averaged 27.4 ppg (second in NBA), career-high 8.1 rpg, 3.1 apg and shot .452 (743-1,643) over League-leading 38.7 mpg in his 11th NBA season...Went 167-415 (.402) from Downtown (career-highs 167 3PT FGM and .402 3PT pct.; second straight 100+ home run year). 

Led Knicks in scoring in 66 of his 77 games...Led NYK in assists 12 times, rebounds 38 times...Scored double-figure points in each of his 77 regular season games...Had five 40+ scoring games (34 career) and one 50+ game (career-high 62 vs. Bobcats, Jan. 24), his fourth career 50+ game...Recorded 25 30+ scoring games, 22 double-doubles and one 20+ rebound game (20 reb vs. Clippers, Jan. 17, second career 20+ board game)...Scored 20+ points in a half 24 times. 
<br><br>
<h4>On The Leader Board:</h4>
<br>After winning the League’s scoring title in 2012-13, Carmelo finished second in 2013-14 with 27.4 ppg, trailing only Oklahoma City’s Kevin Durant (32.0)...Has ranked among NBA Top 20 in scoring in each of his 11 pro seasons, finishing in the Top 10 in each of the last nine campaigns...Led the NBA in minutes per game (38.7), joining Anthony Mason in 1995-96 (42.2) as the only Knicks ever to lead the League in that category...Ranked 30th in the League in rebounds (8.1), 17th in 3PT FG pct. (career-high .402) and 23rd in FT pct. (career-high .848). 
<br><br>
<h4>U-S-A:</h4>
<br>Three-time U.S. Olympian and two-time gold-medalist was key factor in gold-medal win at 2012 London Games...Member of gold medal-winning U.S. Olympic teams in 2008 and 2012; member of bronze medal-winning U.S. squad in 2004...Averaged 16.3 points (second on squad to Kevin Durant’s 19.5), 4.8 rebounds and .535 shooting (46-86) over 17.8 minutes in eight games (all off the bench) for gold medal-winning U.S. squad at ’12 London Games... Seventh on 2012 Olympic leader board in scoring (16.3), second in 3PT FGM (23-46, 500)...Scored 37 points (13-16 FGA) - a single-game U.S. Olympic record - in just 14 bench minutes in win over Nigeria, Aug. 2, 2012. Went 10-12 from Downtown and set another U.S. Olympic mark with 10 3PT FGM...Scored eight points (3-9 FGA) in gold medal win over Spain, Aug. 12... Joined Knicks teammate Tyson Chandler as 2012 Olympic gold medalists...Averaged 11.5 points for gold medal U.S. squad at 2008 Beijing Olympics...Averaged team-high 21.2 points as U.S. won gold medal at 2007 FIBA Americas tournament, with U.S. Olympic qualifying scoring records for scoring average and total points (191)...Team-high 19.9 ppg in 2006 FIBA World Championship of Basketball; named to All-Tournament Team...Named 2006 USA Basketball Male Athlete of the Year. 
<br><br>
<h4>PERSONAL:</h4>
<br>Carmelo Kyam Anthony...Son of Mary Anthony...Married singer LaLa Vazquez in New York on Jul. 10, 2010. The couple has a son, Kiyan (6)...Upon joining Knicks, chose the No. 7 because his son’s birthday is Mar. 7; also because his high school number (22) minus his number at Denver at Syracuse (15) is seven...Fan of the Baltimore Ravens, Baltimore Orioles and Texas Longhorns football...At Oak Hill Academy, was named First Team All-America by USA Today and Parade Magazine and was named to McDonald’s All-American Team...Featured on the cover of EA Sports’ NBA Live 2005 and NCAA 
<br><br>
</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
