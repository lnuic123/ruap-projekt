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
  <title>Stephen Curry</title>
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
		   <li class="active"><a href="#">Stephen Curry</a></li>
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
      <h4>Stephen Curry</h4>
	  <img src="curry.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: G</p>
			  <li><span>BORN: </span><span class="outset">03/14/1988
			  </span></li><li><span>HEIGHT: </span><span>6ft3in/1.90m
			  </span></li><li><span>WEIGHT: </span><span>190 lbs/85.2 kg
              </span></li><li><span>AGE: </span><span>29 years
              </span></li><li><span>FROM: </span><span>Davidson
              </span></li><li><span>NBA DEBUT: </span><span>2009
              </span></li><li><span>YEARS IN NBA: </span><span>7
              </span></li><li><span>PREVIOUSLY: </span><span><p><strong>GSW</strong> 2009-17</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 99</small></h4>
      <hr>
	  <img src="curry_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Early Years and Education</h4>

<br>Wardell Stephen Curry II was born on March 14, 1988, in Akron, Ohio, but mainly grew up in Charlotte, North Carolina. The oldest son of former NBA player Dell Curry, the junior Curry learned the fundamentals of basketball by watching and practicing with his father. However, it was mom Sonya, a former Division I volleyball star, who instilled the discipline to train in her son while Dell Sr. was with his team on road trips.
<br><br>
<br>Lightly recruited by major college basketball programs despite a standout career at Charlotte Christian School, Curry enrolled at tiny Davidson College near his hometown. He immediately showcased his skills by scoring 32 points against the University of Michigan in his second game and wound up earning Southern Conference freshman of the year honors.
<br><br>
<br>Curry became a national star in March of his sophomore year, when he carried the Wildcats to a berth in the regional finals of the NCAA tournament with a series of high-scoring performances. After leading the nation with an average of 28.6 points per game as a junior, the All-American was selected with the seventh pick of the 2009 NBA Draft by the Golden State Warriors.
<br><br>
<h4>NBA Stardom</h4>
<br>Despite his slight frame and boyish looks, Curry proved more than capable of handling the NBA opposition with his shooting and ball-handling abilities. The 6'3" guard averaged more than 22 points per game after the 2010 All-Star break, and wound up finishing second in the Rookie of the Year balloting. His impressive play earned him a spot on the USA Men's Basketball Senior National Team, which won the gold medal at the 2010 World Championships.
<br><br>
<br>Curry sustained a sprained ankle while practicing with the national team, an injury that lingered for the following two seasons. A return to full health allowed him to regain his dazzling form in 2012-13, and Curry responded by setting an NBA record with 272 three-pointers. Named the Western Conference Player of the Month in April, he followed by leading the Warriors to an upset against the Denver Nuggets in the first round of the playoffs.
<br><br>
<br>Curry went on to set a new record with 286 three-pointers and led the league in steals, an impressive all-around display that garnered him the Most Valuable Player Award. He then capped a memorable season by helping the Warriors knock off LeBron James and the Cleveland Cavaliers in the NBA Finals, giving the team its first championship since 1975. 

For an encore, Curry helped the Warriors to 24 consecutive wins out of the starting gate in 2015-16, a torrid pace that propelled the team to an NBA-record 73 wins. The superstar guard again demonstrated his unparalleled skills throughout the season, finishing with an astounding 402 three-pointers and league-high 30.1 points per game. In May 2016, Curry became the first person to be named Most Valuable Player by unanimous vote in NBA history, and one of only 11 players to win the MVP award two years in a row.
<br><br>
<br>In 2017, Curry helped lead the Warriors to the finals for the third year in a row, facing off again against LeBron James and the Cleveland Cavaliers. In game five, Curry scored 34 points and teammate Kevin Durant added another 39 points in a 129-120 victory, the Warriors second NBA championship in two years. 

The victory was sweet and long awaited for Curry. After the Warriors' 2016 loss, he had asked a friend to save a cigar for him so he could smoke it when the team won back the title. Curry lit up his cigar live on NBA TV. "I've been waiting a whole year to smoke this," Curry said.
<br><br>
<h4>Personal Life</h4>
<br>Curry has two siblings: Brother Seth also went on to a career in professional basketball after starring at Duke University, and sister Sydel became a volleyball player at Elon University.

Curry married his college sweetheart, Ayesha, in July 2011. One year later they had their first child, a daughter named Riley.

Since his time as a student at Davidson, Curry has been involved with the United Nations Foundation's Nothing But Nets campaign, which distributes insecticide-treated mosquito nets across Africa to help combat malaria. The NBA star also raises resources for schools through the Stephen Curry Foundation and annually hosts a pair of charity golf events.
<br><br>

</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
