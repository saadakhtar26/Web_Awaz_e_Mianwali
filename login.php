<!DOCTYPE html>
<html>
<head>

	<?php include("meta.php"); ?>

	<?php
		function upload($filename){
			$date = $_POST["date"];
			$year = substr($date,0,4);
			$month = substr($date,5,2);
			$day = substr($date,8,2);

			$target_dir = $year . "/" . $month . "/" . $day . "/" ;
			$target_dir1 = $year . "/" . $month . "/" . $day ;

			if (!file_exists($year . "/")) {
				mkdir($year);
			}
			if(!file_exists($year . "/" . $month . "/")){
				mkdir($year . "/" . $month);
			}
			if (!file_exists($target_dir1 . "/")) {
				mkdir($target_dir1);
			}
			$target_file = $target_dir . basename($_FILES[$filename]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$target_file = $target_dir . $filename . "." . $imageFileType ;
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES[$filename]["tmp_name"]);
				if($check == false) {
					echo "<p>File is NOT an Image.</p>";
					$uploadOk = 0;
				}
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				//Get a list of all of the file names in the folder.
				$fileslist = glob($target_dir . '/*');

				//Loop through the file list.
				foreach($fileslist as $fileslisteach){
					//Make sure that this is a file and not a directory.
					if(is_file($fileslisteach)){
							//Use the unlink function to delete the file.
							unlink($fileslisteach);
					}
				}
			}
			// Check file size
			if ($_FILES[$filename]["size"] > 1000000) {
				echo "<p>Sorry, File is too Large !</p>";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "<p>Sorry, Only jpg, png & gif files are allowed !</p>";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "<p>Sorry, File was NOT Uploaded !</p>";
			// if everything is ok, try to upload file
			}
			else {
				if (move_uploaded_file($_FILES[$filename]["tmp_name"], $target_file)) {
					echo "<p> ". $filename . " has been Uploaded !</p>";
				}
				else {
					echo "<p>Sorry, File was NOT Uploaded !</p>";
				}
			}
		}
		function login(){
			$login = 0;
			$passsubmit = $_POST["pass"];

			//all your sql information data here
			$server = '';
			$user = '';
			$pass = '';
			$db = '';
			
			$sql = "SELECT * FROM user" ;
			$con = new mysqli($server , $user, $pass, $db) or die("<h3>Unable To Connect !</h3>") ;
			$result = $con->query($sql) ;
			$row = $result->fetch_assoc();
			$dbpass = $row["pass"];

			if ($passsubmit==$dbpass) {
				$login = 1;
			}
			else{
				$login = 0;
			}
			if ($login==1) {
				include("upload/upload.php");
				mysqli_close($con);
			}
			if ($login==0) {
				echo "<h4 style=\"color:#f00;\">پاسورڈ درست نہیں، دوبارہ کوشش کریں !</h4>";
				include("login-form.php");
			}
		}
		function changepass(){
			$oldpass = $_POST["oldpass"] ;
			$newpass = $_POST["newpass"] ;

			//all your sql information data here
			$server = '';
			$user = '';
			$pass = '';
			$db = '';
			
			$sql = "SELECT * FROM user" ;
			$con = new mysqli($server , $user, $pass, $db) or die("<h3>Unable To Connect !</h3>") ;
			$result = $con->query($sql) ;
			$row = $result->fetch_assoc();
			$dbpass = $row["pass"];

			if ($oldpass==$dbpass && $newpass!='') {
				$newsql = "UPDATE user SET pass='{$newpass}' WHERE 1" ;
				if (mysqli_query($con, $newsql)) {
					echo "<h3>Password Successfully Changed !</h3>";
				}
			}
			else {
				echo "<h4>Error updating record: " . mysqli_error($con) . "</h4><h4>New Password should not be empty !<h4>" ;
			}
			mysqli_close($con);
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
		form{
			padding: 7px 7px 7px 7px;
		}
		input,label{
			margin-right: 15px;
		}
		.dateclass{
			margin-top: 8px;
		}
		.mobi-show{
			display: none;
		}
		form{
			margin: 8px 0px 8px 0px;
		}
		footer{
			padding: 30px;
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
		@media (max-width:615px) {
			.mobi{
				display: none;
			}
			.mobi-show{
				display: block;
			}
			input[type=submit],input[type=date],label{
				margin-top: 15px;
			}
		}
	</style>
</head>

<body>

	<?php include("nav.php"); ?>

	<section class="w3-row-padding w3-card w3-center">

		<?php
		if ($_SERVER["REQUEST_METHOD"]=="POST") {if (isset($_POST["changepass"])) {changepass();}}
		if ($_SERVER["REQUEST_METHOD"]=="POST") {if (isset($_POST["login"])) {login();}}else{include("login-form.php");}
		if ($_SERVER["REQUEST_METHOD"]=="POST") {if (isset($_POST["upload"])) {$a = 1;while ($a <= 4) {upload("page" . $a);$a++;}}}?>
  </section>


</body>
</html>
