<!DOCTYPE html>
<html>
<head>

	<?php include("meta.php"); ?>

	<?php
		function search(){
			$date = $_GET["date"];
			$year = substr($date,0,4);
			$month = substr($date,5,2);
			$day = substr($date,8,2);

			if (file_exists($year)) {
				if (file_exists($year . "/" . $month)) {
					if (file_exists($year . "/" . $month . "/" . $day)) {
						$a=1;
						echo "<center><div>";
						while ($a <= 4) {
							$searchfile = $year . "/" . $month . "/" . $day . "/page" . $a ;
							if(file_exists($searchfile . ".jpg")){
								$searchfileext = ".jpg" ;
							}
							if(file_exists($searchfile . ".jpeg")){
								$searchfileext = ".jpeg" ;
							}
							if(file_exists($searchfile . ".png")){
								$searchfileext = ".png" ;
							}
							if(file_exists($searchfile . ".gif")){
								$searchfileext = ".gif" ;
							}
							echo "<img src=\"" . $searchfile . $searchfileext . "\" alt=\"page" . $a . "\" style=\"margin-right:20px;\" />\n" ;
							$a++;
						}
						echo "</div></center>";
					}
					else {
						echo "<p>Date " . $day . " News Doesn't Exists.</p>";
					}
				}
				else {
					echo "<p>Month " . $month . " News Doesn't Exists.</p>" ;
				}
			}
			else{
				echo "<p>Year " . $year . " News doesn't Exists</p>";
			}
		}
	?>

	<style>
		body{
			font-family: verdana;
		}
		.w3-card, .w3-bar{
			padding-left: 25px;
			margin-bottom: 20px;
		}
		.mobi-show{
			display: none;
		}
		form{
			padding: 15px 7px 15px 7px;
		}
		img{
			width: 97%;
			height: 77%;
			margin-bottom: 30px;
			border-bottom: 5px dotted #000;
			image-rendering: pixelated;
		}
		input[type=date]{
			margin-left: 15px;
		}
		.w3-tangerine{
  		font-family: "Tangerine", verdana;
		}
		@media (max-width:350px) {
			.w3-bar a{
				display: block;
				min-width: 95%;
			}
			.w3-card, .w3-bar{
				padding: 0px;
				margin-bottom: 10px;
			}
			.mobi{
				display: none;
			}
		}
		@media (max-width:400px) {
			.mobi{
				display: none;
			}
			.mobi-show{
				display: block;
				margin: 15px 0px 15px 0px;
			}
		}
	</style>
</head>

<body>

	<?php include("nav.php"); ?>

	<section class="w3-row-padding w3-card w3-center">

		<div class="mobi">
	    <form class="w3-center" action="history.php" method="get">
	      <label for="heading" style="font-size: 15pt;">تاریخ منتخب کریں:</label>
	      <i class="fa fa-calendar w3-xlarge"></i><input type="date" name="date" />
	      <input class="w3-btn w3-blue w3-round-xxlarge" type="submit" name="search" value="تلاش کریں" />
	    </form>
	  </div>

		<div class="mobi-show">
	    <form class="w3-center" action="history.php" method="get">
	      <label for="heading" style="font-size: 15pt;">تاریخ منتخب کریں:</label><br />
	      <input type="date" name="date" />
	      <input class="w3-btn w3-blue w3-round-xxlarge" type="submit" name="search" value="تلاش کریں" />
	    </form>
	  </div>

    <?php if ($_SERVER["REQUEST_METHOD"]=="GET") {if (isset($_GET["search"])) {search();}}?>
  </section>

</body>
</html>
