<!DOCTYPE html>
<html>
<head>

	<?php include("meta.php"); ?>

	<?php
		function newslist(){
			$back = 0;
			while ($back <= 10) {
				$newsday = date("Y/m/d" , strtotime("-$back Days"));
				if(file_exists($newsday)){
					echo "<button class=\"collapsible\"><b>\n";
					echo  date("d/m/Y" , strtotime("-$back Days")) ;
					echo "</b></button>\n<div class=\"content\">";

					if (file_exists($newsday)) {
						$a=1;
						while ($a <= 4) {
							$searchfile = $newsday . "/page" . $a ;
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
							echo "<img src=\"" . $searchfile . $searchfileext . "\" alt=\"page" . $a . "\" />\n" ;
							$a++;
						}
					}
					echo "</div>";
				}
				$back++;
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
		}
		img{
			width: 97%;
			height: 77%;
			margin-bottom: 15px;
			border-bottom: 5px dotted #000;
			image-rendering: pixelated;
		}
		.collapsible{
		  cursor: pointer;
		  padding: 18px;
		  width: 45%;
		  border: none;
		  outline: none;
			margin: 8px;
		}
		.collapsible:hover{
			border: 2px solid #000;
		}
		.content{
		  display: none;
		  overflow: hidden;
		}
	</style>
</head>

<body>

	<?php include("nav.php"); ?>

	<section class="w3-row-padding w3-card w3-center">
		<?php newslist(); ?>
			<script language="JavaScript">
				var coll = document.getElementsByClassName("collapsible");
				var i;

				for (i = 0; i < coll.length; i++) {
				coll[i].addEventListener("click", function() {
				  this.classList.toggle("active");
				  var content = this.nextElementSibling;
				  if (content.style.display === "block") {
				    content.style.display = "none";
				  } else {
				    content.style.display = "block";
				  }
				});
				}
			</script>
  </section>

</body>
</html>
