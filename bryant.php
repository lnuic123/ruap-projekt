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
  <title>Kobe Bryant</title>
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
		   <li class="active"><a href="#">Kobe Bryant</a></li>
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
      <h4>Kobe Bryant</h4>
	  <img src="bryant.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: SG</p>
			  <li><span>BORN: </span><span class="outset">08/23/1978
			  </span></li><li><span>HEIGHT: </span><span>6ft6in/1.98m
			  </span></li><li><span>WEIGHT: </span><span>212 lbs/96 kg
              </span></li><li><span>AGE: </span><span>38 years
              </span></li><li><span>FROM: </span><span>Philadelphia
              </span></li><li><span>NBA DEBUT: </span><span>1996
              </span></li><li><span>YEARS IN NBA: </span><span>20
              </span></li><li><span>PREVIOUSLY: </span><span><p><strong>LAL</strong> 1996-2016</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 99</small></h4>
      <hr>
	  <img src="bryant_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Early Life</h4>

<br>Wardell Stephen Curry II was born on March 14, 1988, in Akron, Ohio, but mainly grew up in Charlotte, North Carolina. The oldest son of former NBA player Dell Curry, the junior Curry learned the fundamentals of basketball by watching and practicing with his father. However, it was mom Sonya, a former Division I volleyball star, who instilled the discipline to train in her son while Dell Sr. was with his team on road trips.
<br><br>
<br>Kobe Bean Bryant was born on August 23, 1978, in Philadelphia, Pennsylvania. Named after a Japanese steakhouse, Kobe Bryant is the son of former NBA player Joe "Jellybean" Bryant. 
<br><br>
<br>In 1984, after ending his NBA career, the elder Bryant took the family to Italy, where he played in the Italian League. Growing up in Italy alongside two athletic older sisters, Shaya and Sharia, Kobe was an avid player of both basketball and soccer. When the family returned to Philadelphia in 1991, Bryant joined the Lower Merion High School basketball team, leading it to the state championships four years in a row. With an eye on the NBA, he also started working out with the 76ers.

Though he boasted good grades and high SAT scores, Bryant decided to go straight to the NBA from high school. He was selected by the Charlotte Hornets with the 13th overall pick of the 1996 NBA draft, and was subsequently traded to the Los Angeles Lakers.
<br><br>
<h4>NBA Career</h4>
<br>In his second season as guard, with the Lakers, Bryant was voted a starter for the 1998 All-Star Game, becoming at 19 the youngest All-Star in NBA history. He then teamed up with superstar center Shaquille O'Neal to win three consecutive NBA championships, and was voted first-team all-NBA from 2002-04. He also inked multi-year endorsement deals with Adidas, Sprite and other top sponsors.

Although the Lakers struggled after O'Neal left in 2004, Bryant performed brilliantly. He scored 81 points against the Toronto Raptors in January 2006, the second-highest single-game mark in NBA history, and led the league in scoring that year and the next.
<br><br>
<br>In 2008, Bryant was named Most Valuable Player and carried his team to the NBA Finals, where they lost to the Boston Celtics. In the 2009 NBA Finals, the Lakers beat the Orlando Magic to win the championship. Shortly afterward, Bryant was part of the memorial service to honor friend and music superstar Michael Jackson. The following year, the Lakers won their second straight title by defeating the Celtics.

Bryant played on both the 2008 and 2012 U.S. Olympic teams, winning consecutive gold medals with teammates Kevin Durant, LeBron James and Carmelo Anthony, among several other top players.
<br><br>
<br>After suffering a torn Achilles tendon in April 2013, Bryant worked hard to return to the court before fracturing his knee just six games into the 2013-14 season. The veteran All-Star surpassed Michael Jordan for third all-time on the NBA scoring list in December 2014, but his season ended due to injury for the third straight year when he sustained a torn rotator cuff in January 2015. 

Although Bryant returned in time for the start of the 2015-16 NBA season, he personally struggled alongside his young Lakers teammates. In November 2015, he announced that he would retire at the end of the season. "This season is all I have left to give," he wrote on The Players' Tribune website. "My heart can take the pounding. My mind can handle the grind but my body knows it's time to say goodbye."
<br><br>
<br>An all-star lineup of Laker icons also payed tribute to Bryant including Shaquille O’Neal, Phil Jackson, Pau Gasol, Derek Fisher, Lamar Odom and Magic Johnson.

“We are here to celebrate greatness for 20 years,” Johnson said. “Excellence for 20 years. Kobe Bryant has never cheated the game, never cheated us as the fans. He has played through injury, he has played hurt. And we have five championship banners to show for it.
<br><br>
<h4>Personal Life</h4>
<br>Bryant married 19-year-old Vanessa Laine in April 2001. In July 2003, he was charged with one count of sexual assault on a 19-year-old female hotel worker in Colorado. Bryant said he was guilty of adultery, but innocent of the rape charge. The case against Bryant was dismissed in 2004, and he settled the civil lawsuit filed by the hotel worker against him out of court.

Among his philanthropic endeavors, the basketball great has partnered with the non-profit After-School All-Stars as part of the Kobe & Vanessa Bryant Family Foundation. He also runs an annual summer camp called the Kobe Basketball Academy.
<br><br>

</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
