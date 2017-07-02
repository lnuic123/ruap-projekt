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
  <title>LeBron James</title>
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
		  <li class="active"><a href="#">LeBron James</a></li>
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
      <h4>LeBron James</h4>
	  <img src="james.png" class="img-rounded images" width="180" height="150">     
              <p class="outset"> POSITION: F</p>
			  <li><span>BORN: </span><span class="outset">12/30/1984
			  </span></li><li><span>HEIGHT: </span><span>6ft8in/2.03m
			  </span></li><li><span>WEIGHT: </span><span>250 lbs/113.4 kg
              </span></li><li><span>AGE: </span><span>32 years
              </span></li><li><span>FROM: </span><span>St. Vincent-St. Mary HS (OH)
              </span></li><li><span>NBA DEBUT: </span><span>2003
              </span></li><li><span>YEARS IN NBA: </span><span>13
              </span></li><li><span>PREVIOUSLY: </span><span><p><strong>CLE</strong> 2014-17</p><p><strong>MIA</strong> 2010-14</p><p><strong>CLE</strong> 2003-10</p></span></li></ul></section></section><section><header>
    </div>

    <div class="col-sm-9">
      <h4><small>ATTRIBUTES - OVERALL: 99</small></h4>
      <hr>
	  <img src="james_atr.png" class="img-rounded images" width="600" height="500">
      <h4>PLAYER BIO</h4>
          
             <p><h4>High School Basketball Star</h4>

<br>Professional athlete LeBron Raymone James was born on December 30, 1984, in Akron, Ohio. At an early age, he showed a natural talent for basketball. James was recruited by St. Vincent-St. Mary High School to join their basketball team in 1999.
<br><br>
<br>As a freshman, James averaged 18 points per game. He helped the team to a Division III state title by scoring 25 points in the championship game. Word of his advanced basketball skills spread, and James received several honors for his performance. As a high school sophomore, he was chosen for the USA Today All-USA First Team. James was the first sophomore ever selected for this award. His team also won the Division III state title for the second year in a row.
<br><br>
<br>The following school year, James was named PARADE magazine's High School Boys Basketball Player of the Year and Gatorade Player of the Year. Following the end of his junior year, James was such a strong player that he contemplated going pro.
<br><br>
<br>Deciding to finish his education, James had a tremendous senior year on the court. He averaged 31.6 points per game, helping his team clinch their third state title. The team also earned the top national ranking that year. Overall, James scored 2,657 points, 892 rebounds and 523 assists during his four years at St. Vincent-St. Mary High School. He would soon emerge as one of the National Basketball Association's leading players.
<br><br>
<h4>Career With Cleveland Cavaliers</h4>
<br>With his impressive record, it was no surprise that James was the first player picked in the 2003 NBA Draft. The Cleveland Cavaliers signed the powerful young forward, and he proved to be a valuable addition to the then-struggling franchise. The team had ended the previous season in eighth place in the Eastern Conference. Around this time, James also signed several endorsement deals, including one with Nike for $90 million.
<br><br>
<br>During the 2003-04 season, James made history when he became the first member of the Cavalier franchise to win the NBA Rookie of the Year Award. He also became the youngest player at only 20 years old to receive this honor. Additionally, James, averaging 20 points per game at this time, became one of only three rookies to accomplish this feat, putting him in the same company as Michael Jordan and Oscar Robertson.
<br><br>
<br>During the summer of 2004, James made his Olympic debut at the Summer Games in Athens, Greece, as part of the U.S. Olympic basketball team. He and his teammates won bronze medals after defeating Lithuania. Argentina took home the gold after beating Italy in the finals.
<br><br>
<h4>NBA Star</h4>
<br>James continued to excel professionally in the NBA the following season, upping his average points per game to 27.2. He made NBA history again in 2005, when he became the youngest player to score more than 50 points in one game. He was selected for the NBA All-Star Game for the first time, a feat he would repeat several times over the next few seasons.
<br><br>
<br>During the 2007-08 season, James continued to help the Cavaliers improve their standing in the Eastern Conference. The team made it to the semifinals, where they were defeated by the Boston Celtics in seven games. In terms of individual performance, James had a stellar year, outperforming such rival players as Kobe Bryant and Allen Iverson by scoring an average of 30 points per game, the highest average in the NBA regular season.
<br><br>
<h4>Career With Miami Heat</h4>
<br>That summer, James traveled to Beijing, China, to play with the likes of Bryant, Jason Kidd and Dwyane Wade on the U.S. Olympic basketball team. This time around the U.S. team brought home the gold after defeating Spain in the final round.
<br><br>
<br>Early in the 2008-09 season, sports journalists and fans began talking about James's future in the sport. He had the option to become a free agent in 2010, and there was much discussion as to where James would end up. Some journalists identified the New York Knicks as a potential suitor for the rising player. James made several references to his impending free agent status, but he was sure to downplay the matter. "I am focused on the team that I am on right now and winning a championship ... I don't think about making a change at this point," James told reporters.
<br><br>
<br>Shortly after becoming a free agent, however, James announced that he would be joining the Miami Heat for the 2010-11 season. His fans in Cleveland were less than pleased, and many considered his departure a betrayal to his hometown. Soon after James's announcement, Cleveland Cavaliers majority owner Dan Gilbert wrote an open letter declaring James's decision as "selfish," "heartless" and a "cowardly betrayal." Unfazed, James finished second in the league during his first season with the Heat, scoring 26.7 points per game.
<br><br>
<h4>Championship Wins</h4>
<br>The 2011-12 season also saw major success for James and the Miami Heat; with his team's victory over the Oklahoma City Thunder in the NBA Finals, the superstar forward finally earned his first title. In the clinching Game 5, James scored 26 points, and had 11 rebounds and 13 assists. "I made a difficult decision to leave Cleveland but I understood what my future was about," James told FOX Sports following the game. "I knew we had a bright future [in Miami]."

James competed at his third Olympic Games in 2012, at the Summer Olympics in London, along with teammates Kevin Durant, Carmelo Anthony and Kobe Bryant, as well as several other top players. The U.S. basketball team took the gold medal—James's second consecutive Olympic gold.

During the 2012-13 season, James made NBA history yet again: On January 16, 2013, at age 28, he became the youngest player to score 20,000 points, succeeding Kobe Bryant of the Lakers—who accomplished this feat when he was 29—and becoming only the 38th player in NBA history to achieve this distinction. James made a jump shot the final seconds of the game, bringing his scoring total 20,001 and leading the Heat to a 92-75 victory over the Warriors.

Success followed the Heat to the end of the 2012-13 season: Following a hard-fought, six-game series against the Indiana Pacers to win the Eastern Conference, Miami outlasted the San Antonio Spurs in seven games to win its second consecutive NBA championship.
<br><br>
<h4>Return to Cavaliers</h4>
<br>At the culmination of the 2013-14 season, Miami returned to the NBA Finals to face off against the Spurs again, this time losing to San Antonio after five games. In July of 2014, after opting out of his contract with the Heat and considering other teams, James announced that he would be returning to the Cavaliers.
<br><br>
<br>The following year, the Cavs overcame the distraction of a midseason coaching change and breezed through the playoffs to earn a rematch with the Warriors, marking the sixth straight NBA Finals appearance for King James. In perhaps the crowning achievement of his career, he led his team back from a 3-1 deficit, scoring 41 points in both Games 5 and 6, before recording a triple double in Game 7 to give the Cavs their first championship in franchise history.
<br><br>
<br>Voted Finals MVP, James said, "I came back to bring a championship to our city. I knew what I was capable of doing. I knew what I learned in the last couple years that I was gone, and I knew if I had to—when I came back—I knew I had the right ingredients and the right blueprint to help this franchise get back to a place that we've never been. That's what it was all about."
<br><br>
<h4>Personal Life</h4>
<br>Outside of the NBA, James has worked to help others. He established the LeBron James Family Foundation in 2004, along his mother Gloria, to help out children and single-parent families in need. Among its many programs, the organization builds playgrounds in economically disadvantaged areas and hosts an annual bike-a-thon.
<br><br>

</br>
</div>
</p>

<footer class="container-fluid">
  <p>NBA</p>
</footer>

</body>
</html>
