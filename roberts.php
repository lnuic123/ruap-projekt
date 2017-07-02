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
  <title>Brian Roberts</title>
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
		   <li class="active"><a href="#">Brian Roberts</a></li>
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
      <h4>Brian Roberts</h4>
	  <img src="roberts.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: PG</p>
			  <li><span>BORN: </span><span class="outset">08/23/1978
			  </span></li><li><span>HEIGHT: </span><span>6ft1in/1.85m
			  </span></li><li><span>WEIGHT: </span><span>173 lbs/78 kg
              </span></li><li><span>AGE: </span><span>31 years
              </span></li><li><span>FROM: </span><span>Toledo, Ohio
              </span></li><li><span>NBA DEBUT: </span><span>2008
              </span></li><li><span>YEARS IN NBA: </span><span>19
   </span></li><li><span>PREVIOUSLY: </span><span><p><strong>CH</strong> 2016-17</p><p><strong>PTB</strong> 2016</p><p><strong>CH</strong> 2014-16</p><p><strong>NOH</strong> 2012-14</p><p><strong>BB</strong> 2009-12</p><p><strong>GG</strong> 2008-09</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 72</small></h4>
      <hr>
	  <img src="roberts_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>Professional History</h4>
			 <h4>2012-13 SEASON:</h4>

<br>Led the team in scoring four times and led or tied for the team lead in assists nine times...Totaled 13 points, six assists and three rebounds in season finale at DAL 4/17...Notched second career double-double with 15 points and 11 assists in L vs. LAC on 4/12...Tallied career-highs in points (20) and rebounds (6) in addition to five assists 4/10 at SAC...Poured in 15 points off the bench in win vs. CLE on 3/31 including 3-4 3PT FG...In starting role on 3/25 vs. DEN, poured in monster 13 point, 18 assist performance...Came off the bench to total 12 points and three assists 3/20 vs. BOS...Dished out then career-high nine assists in career-high 43 minutes vs. POR on 3/10... Scored a team-high 16 points, draining a career-high four three pointers on 12/12 at OKC...Tied a season-high in steals (2) in the 12/8 loss to MIA...Reached double-digits in scoring for the sixth time on the season on 12/7 vs. MEM...Led the New Orleans bench in scoring, collecting 11 points on 11/28 vs. UTA... Notched career high 17 points against DEN on 11/25...Recorded his second double-digit scoring game of his career (13), making three of four three-point field goals on 11/20 vs. the NYK...Recorded nine points, seven assists, two steals and one rebound 11/16 vs. OKC... Recorded career-highs in both points (16) and assists (8) on 11/9 vs. CHA...Totaled two points, three rebounds and one assist 11/3 at CHI. 
<br><br>
<br><br>
<h4>2012-13 SEASON:</h4>
<br>Led the team in scoring four times and led or tied for the team lead in assists nine times...Totaled 13 points, six assists and three rebounds in season finale at DAL 4/17...Notched second career double-double with 15 points and 11 assists in L vs. LAC on 4/12...Tallied career-highs in points (20) and rebounds (6) in addition to five assists 4/10 at SAC...Poured in 15 points off the bench in win vs. CLE on 3/31 including 3-4 3PT FG...In starting role on 3/25 vs. DEN, poured in monster 13 point, 18 assist performance...Came off the bench to total 12 points and three assists 3/20 vs. BOS...Dished out then career-high nine assists in career-high 43 minutes vs. POR on 3/10... Scored a team-high 16 points, draining a career-high four three pointers on 12/12 at OKC...Tied a season-high in steals (2) in the 12/8 loss to MIA...Reached double-digits in scoring for the sixth time on the season on 12/7 vs. MEM...Led the New Orleans bench in scoring, collecting 11 points on 11/28 vs. UTA... Notched career high 17 points against DEN on 11/25...Recorded his second double-digit scoring game of his career (13), making three of four three-point field goals on 11/20 vs. the NYK...Recorded nine points, seven assists, two steals and one rebound 11/16 vs. OKC... Recorded career-highs in both points (16) and assists (8) on 11/9 vs. CHA...Totaled two points, three rebounds and one assist 11/3 at CHI. 
<br><br>
<h4>INTERNATIONAL CAREER:</h4>
<br>Won the 2009-10, 2010-11 and 2011-12 German National Championship with Brose Baskets Bamberg...won the 2010 and 2011 German National Cup with Brose Baskets Bamberg...2011-12 (Brose Baskets Bamberg): Competed in NBA Summer League with New Orleans, averaging 13.8 points, 2.2 assists and 2.0 rebounds in 27.4 minutes per game over five games (three starts)...shot 50% from the field, 54.5% from three-point range and 93.8% from the line...appeared in 54 games for Brose Baskets Bamberg, averaging 11.4 points, 3.0 assists and 2.0 rebounds in 25.9 minutes per game...played in 10 games for Brose Baskets Bamberg in Germany during Euroleague play, averaging 8.6 points, 2.2 assists and 1.5 rebounds... shot 50 percent from the field and helped lead his team to the 201 1-12 German National Championship. 2010-11 (Brose Baskets Bamberg): Averaged 12.8 points and 2.3 assists in 10 games during the 2010-11 Euroleague...Set Euroleague career highs in points (23), rebounds (5), assists (7) and steals (2)...2009-10 (Brose Baskets Bamberg): Played in 43 games for Brose Baskets Bamberg in 2009-2010, averaging 11.8 points on 44 percent three-point shooting...Appeared in five games of NBA Las Vegas Summer League with the Sacramento Kings...averaged 3.0 points and 1.2 assists in 10.1 minutes per game...2008-09 (Galil Elyon): Played for Galil Elyon in Israel, averaging 15.5 points, 2.3 rebounds and 2.4 assists in 28 games before signing a two-year contract to play in Germany with Brose Baskets Bamberg...participated in NBA Las Vegas Summer League with the Lakers, averaging 5.4 points and 1.2 assists in five games. 
<br><br>
<h4>COLLEGE:</h4>
<br>Played four seasons for Dayton…led team in scoring final three seasons…averaged 15.7 points, 3.0 rebounds and 2.8 assists in 125 career games…averaged 18.4 points, 3.4 assists and shot 46 percent from the three-point line over 34 games his senior season…was named First Team All District by the National Association of Basketball Coaches his senior season…named as one of 30 nominees for the John R. Wooden Award his senior year…also named as one of 30 nominees for the Naismith Award and also selected as one of 16 finalists for the Bob Cousy award…Roberts is UD's second three-time All-Atlantic 10 selection (second team in 2005-06, 2006-07, first team in 2007-08). 
<br><br>
<h4>PERSONAL:</h4>
<br>Roberts was the 2004 Ohio Division I Co-Player of the Year after guiding Toledo St. John’s High School to the state championship game…Roberts' 18 points in the finals led all scorers as Hamilton edged St. John's 51-48...had a 70-11 career record in his three seasons as his team's starting point guard…in addition to reaching the 2004 state finals, TSJ was ranked #5 in 2003 and #1 in the state in 2002…his teams reached the Ohio Elite 8 in 2002, the state final semifinals in 2003, and the title game in 2004…he was a three-time Associated Press All-Ohio selection (honorable mention, third team, and first team in 2004), two-time District VII Player of the Year and two-time Toledo City League Player of the Year…majored in marketing at Dayton…has a brother (Nolan) who played college basketball at Valparaiso and a sister (Shanda) who played at Kentucky and Toledo. 
<br><br>
</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
