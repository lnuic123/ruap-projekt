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
  <title>Nick Young</title>
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
		   <li class="active"><a href="#">Nick Young</a></li>
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
      <h4>Nick Young</h4>
	  <img src="young.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: G-F</p>
			  <li><span>BORN: </span><span class="outset">06/01/1985
			  </span></li><li><span>HEIGHT: </span><span>6ft7in/2.01m
			  </span></li><li><span>WEIGHT: </span><span>210 lbs/95.3 kg
              </span></li><li><span>AGE: </span><span>32 years
              </span></li><li><span>FROM: </span><span>Southern California
              </span></li><li><span>NBA DEBUT: </span><span>2007
              </span></li><li><span>YEARS IN NBA: </span><span>9
   </span></li><li><span>PREVIOUSLY: </span><span><p><strong>LAL</strong> 2013-17</p><p><strong>PHI</strong> 2012-13</p><p><strong>LAC</strong> 2011-112</p><p><strong>WAS</strong> 2007-12</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 73</small></h4>
      <hr>
	  <img src="young_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Professional History</h4>
			 <h4>CAREER TRANSACTIONS:</h4>

<br><br>
<br>Selected by Washington with the 16th overall pick in the 2007 NBA Draft... Re-signed with Washington on 12/18/11... Acquired by the L.A. Clippers as part of a three-team trade with Washington and Denver in which the Wizards also traded JaVale McGee and Ronny Turiaf to the Nuggets for Nene on 3/15/12; Washington also received Brian Cook and a future second round pick from L.A.... Signed as a free-agent with Philadelphia on 7/12/12... Signed as a free agent with the Los Angeles Lakers on 7/11/13... Signed a multi-year contract with the Los Angeles Lakers on 7/21/14 
<br><br>
<h4>2015-16 SEASON:</h4>
<br>Played in 54 games (two starts), recording averages of 7.3 points, 1.8 rebounds, 0.6 assists, 0.43 steals and 0.13 blocks over 19.1 minutes … Scored in double-figures 19 times, including 20+ points once … Scored 14 points on 5-of-8 FG (4-7 3FG) 10/28 vs. MIN … Notched 17 points, three assists and three steals 10/30 at SAC … Led the team with 17 points off the bench, hitting 5-9 from deep 11/10 at MIA … Scored a bench-high 13 points on 4-6 shooting (2-2 from deep) with a game-best +20 rating in 26 minutes 11/15 vs. DET … Tied for the team-high with 22 points (six 3FGM) 11/29 vs. IND … Had 13 points (5-9 FG) with two assists 12/9 at MIN … Led the bench with 13 points, hitting three triples 12/12 at HOU … Scored 14 points 12/19 at OKC … Tied a career-high with four steals 1/1 vs. PHI … Had 13 points in 22 minutes 3/6 vs. GSW … Missed three games due to gastroenteritis (12/23, 3/27-3/28) … DNP-CD 19 times … Inactive six times. 2014-15:
Appeared in 42 games (all as a reserve), averaged 13.4 points, 2.3 rebounds, 1.0 assists, 0.55 steals and 0.26 blocks in 23.8 minutes ... Registered 10+ points 28 times and 20+ points eight times … Finished 7th in the NBA in free-throw percentage, shooting a career-best 89.2% (132- 148) ... Completed four four-point plays ... In first game back from injury, totaled 17 points and five rebounds 11/18 at Atlanta ... Tied a career-high with two blocks with a bench-leading 13 points 11/26 vs. Memphis … Scored 20 points (5-8 3FG) 11/30 vs. Toronto … Dropped in 19 points in 20 minutes 12/2 at Detroit … Totaled 21 points (5-8 3FG) 12/3 at Washington … Had a game-high 29 points (6-9 3FG), including the game-winning 30’ three-pointer with 7.4 seconds remaining in overtime 12/12 at San Antonio … Finished with 26 points and five rebounds 12/21 at Sacramento … Hit five three-pointers en route to 15 points 12/26 at Dallas … Scored a team-high 21 points (4-6 3FG) 12/28 vs. PHX … Made 31 consecutive free throws from 1/2 vs. MEM to 1/15 vs. CLE ... Scored 22 points (12-12 FT) 1/4 vs. Indiana … Led the team with 23 points on a career high-tying 13 made free throws (13-13) 1/16 at Utah … Tied for a game-high with 24 points 1/19 at Phoenix, hitting four three-pointers … Scored 17 points in 20 minutes 1/23 at San Antonio … Missed 39 total games due to injury, including 10 games with a torn ligament, right thumb (10/28-11/16), two games with a sprained right ankle (1/27-1/29), 11 games with a sore left knee (2/25-3/16) and 16 games with a fracture, left kneecap (3/19-4/15) … DNP-CD one time. 
<br><br>
<h4>College History:</h4>
<br>Early entry candidate for the 2007 NBA Draft following his junior season at USC. Earned First Team All-Pac-10 honors his sophomore and junior seasons at USC. As a junior, ranked second in the conference in scoring (17.5 ppg), fifth in field goal percentage (52.5% FGs) and second in 3-point percentage (44.0% 3FGs).
<br><br>
<h4>PERSONAL:</h4>
<br>Son of Charles and Mae Young. While with Washington, started the Nick Young Foundation with hopes of putting an end to gang violence and offering free psychiatric services to those who have been affected by it. Was the focus of a documentary titled "Second Chance Season," which portrayed his life story and path to the NBA.
<br><br>
</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
