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
  <title>Alan Anderson</title>
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
		  <li class="active"><a href="#">Alan Anderson</a></li>
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


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Alan Anderson</h4>
	  <img src="anderson.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: SG</p>
			  <li><span>BORN: </span><span class="outset">10/16/1982
			  </span></li><li><span>HEIGHT: </span><span>6ft6in/1.98m
			  </span></li><li><span>WEIGHT: </span><span>220 lbs/99.8 kg
              </span></li><li><span>AGE: </span><span>34 years
              </span></li><li><span>FROM: </span><span>Michigan State
              </span></li><li><span>NBA DEBUT: </span><span>2005
              </span></li><li><span>YEARS IN NBA: </span><span>7
              </span></li><li><span>PREVIOUSLY: </span><span><p><strong>LAC</strong> 2016-17</p><p><strong>WAS</strong> 2015-16</p><p><strong>BKN</strong> 2013-15</p><p><strong>TOR</strong> 2011-13</p><p><strong>CHA</strong> 2005-07</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 69</small></h4>
      <hr>
	  <img src="anderson_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
              <h4>Professional History
            </h4><p>
              2013-14 SEASON:<br>
Appeared in 78 games (26 starts) for the Brooklyn Nets in his 5th NBA season, averaged 7.2 points, 2.2 rebounds, 1.0 assists, 0.6 steals and 0.1 blocks in 22.7 minutes...
Recorded 22 points off the bench vs. SAS 2/6…Scored 15 points and notched a season-high four assists at ATL 1/16… Set a new career-high with three blocks at TOR 1/11… Recorded a season-high 26 points (23 in the second half) at PHI 12/20… Recorded his 200th career assist at MEM 11/30… Recorded another double-figure scoring performance with 12 points off the bench at HOU 11/29… Scored a season-high 16 points on 5-of-10 shooting at CHA 11/20… Recorded 11 points (6-7 FTs) vs. POR 11/18… Scored 15 points, including four made three-pointers, in 32 minutes at LAC 11/16.

PREVIOUS SEASONS:<br>

2012-13 (Toronto): Appeared in 65 games for the Raptors, starting two… Averaged career-highs of 10.7 points, 2.3 rebounds and 1.6
assists per game… Shot 38.3% from the field, 33.3% from three-point range and 85.7% (14th in NBA) from the free throw line… Scored 20
or more points in eight games, once topping 30... Averaged 11.0 points, 3.5 rebounds and 31.0 minutes in two starts... Inactive for 17
games... Scored 20 or more points eight times... Led the team in scoring on 13 occasions … Topped the bench in points a team-high 32
times… Scored a career-high 35 points off the bench Mar. 22 vs. New York and tied a team record for points in a quarter with 20 points in
the third… Ranked second on the team in scoring (14.5) during 15 games in January… Dished out a career-best eight assists Jan. 20 vs.
L.A. Lakers… Totaled 27 points Jan. 16 vs. Chicago… Missed 17 games (Nov. 12 - Dec. 12) due to a partially torn plantar fascia - left
foot… Made his first start Nov. 10 vs. Philadelphia, but left in the third quarter with a sprained left foot.
<br><br>

2011-12 (Toronto): Averaged 9.6 points, 2.0 rebounds and 27.1 minutes in 17 games with Toronto... Made 12
starts, averaging 11.8 points, 2.2 rebounds and 33.0 minutes (Apr. 4-26)... Shot .400 (22-55) from three-point range as a starter... Scored
11+ points in nine of the last 10 games (Apr. 9-26)... 2011-12 (China): With Shandong FB from November – February... Averaged 25.5
points, 5.5 rebounds and 35.5 minutes in 31 games... Scored 54 points Feb. 3 against Zhejiang C. and 50 against Jilin NE. T. on Jan. 6...
NBA D-League (Canton): Averaged 21.5 points and 4.6 rebounds in eight appearances with the Canton Charge... Shot .550 (60-for-109)
from the field and .800 (40-for-50) at the charity stripe... 
<br><br>

2010-11 (Spain): In December joined Regal FC Barcelona of the Spanish ACB after starting the season in the NBA
D-League… Averaged 10.6 points and 2.9 rebounds in 30 Spanish League contests and 11.4 points and 3.1 rebounds in 10 Euroleague games… NBA D-League (New
Mexico): In 10 games with New Mexico Thunderbirds, averaged 21.1 points, 5.8 rebounds, 5.0 assists and 37.4 minutes, while shooting .531 percent from the field… 
<br><br>

2009-10 (Israel): Played for Israel-Premier League superpower Maccabi Tel-Aviv… Averaged 10.3 points and 2.4 rebounds in regular season play… Upped averages to 13.7
points and 3.6 rebounds in 20 Euroleague outings… Led Maccabi to the Israeli Cup title… 
<br><br>

2008-09 (Russia, Croatia): Began the season with Triumph Lyubertsy in the
Russia A-Superleague and moved to KK Cibona VIP Zagreb in the Croatian-A1 league in January… Averaged 11.7 points and 4.1 rebounds with Triumph in seven league
games… Appeared in 13 league games with KK Cibona, averaging 18.4 points and 5.6 rebounds… Made eight Euroleague outings with KK Cibona posting an average of
15.3 points and 4.8 rebounds… Won the Croatian League regular season championship as well as the Croatian Cup… 
<br><br>

2007-08 (Italy): Averaged 14.4 points and 4.9
rebounds with La Fortezza Bologna in the Italy-SerieA… Saw action in nine Euroleague contests, averaging 11.2 points and 3.0 boards… 
<br><br>

2006-07 (Charlotte): Appeared in
17 games with Charlotte, averaging 4.5 points and 1.5 rebounds in 12.2 minutes… Missed eight games at the beginning of the season due back spasms and was waived
Nov. 20… Re-signed with the Bobcats on Mar. 17 and appeared in 11 of the final 16 games… NBA D-League (Tulsa): Saw action in 26 games with Tulsa, averaging 15.8
points, 3.8 rebounds and 28.7 minutes… 
<br><br>

2005-06 (Charlotte): Started in seven of 36 appearances for Charlotte and averaged 5.8 points and 1.9 rebounds in 15.3 minutes…
Reached double-figure scoring seven times, including three 15-plus point performances… Appeared in six games with the Bobcats’ 2005 summer league entry at the Rocky
Mountain Revue… Averaged 7.7 points and 2.5 rebounds in 20.2 minutes… In one summer league start, scored 16 points on 7-of-10 shooting from the field, with six
rebounds, in 33 minutes against Atlanta.
<br><br>

CAREER TRANSACTIONS:<br>
August 9, 2005: Signed as a free agent with the Charlotte Bobcats… November 26, 2006: Waived by the Charlotte Bobcats… March 16, 2007:
Signed a contract for the rest of the season with the Charlotte Bobcats… March 26, 2012: Signed two 10-day contracts with the Toronto Raptors, then signed a contract for
the rest of the season… July 30, 2013: Signed a two-year contract with the Brooklyn Nets.
<br><br>

COLLEGE:<br>
Averaged 9.5 points, 4.2 rebounds and 2.4 assists in 126 games during his four-year collegiate career at Michigan State... Helped lead the Spartans to
the 2005 NCAA Final Four in St. Louis, Mo.... Wore the number 15 at Michigan State for his one of his favorite players, former Net, Vince Carter… Graduated from MSU in
four years with a family community services major.
<br><br>

PERSONAL:<br>
2001 Minneapolis/St. Paul Metro Player of the Year… 2001 Parade Magazine Fifth-Team All-American… Averaged 21.2 points, 5.1 rebounds and 7.2 assists
as a senior, leading DeLaSalle (Minneapolis) to a 21-3 record… Named the number-one surprise player of the summer of 2000 by The Sporting News after a strong showing
at the Nike Camp in Indianapolis… Entered his senior season rated the No. 19 player in the nation by Bob Gibbons and No. 22 by Rivals.com… Participated in the 2000 USA
Basketball Youth Development Festival, helping the North squad capture the Gold Medal… Averaged 21.3 points as a junior, helping his team to a 24-5 record… 2000 firstteam
All-Minnesota honoree… Earned 2000 All-State Tournament honors… 2000 Second Team AAU All-American, playing for Team Minnesota… Averaged 15.4 points as a
sophomore at Edison High School… Scored 13.2 points per game as a freshman… Led his football team to a state championship as a junior playing wide receiver… Honor
roll student.
</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
