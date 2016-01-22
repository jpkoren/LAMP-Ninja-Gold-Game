<?php 
session_start(); 

if (!isset($_SESSION['gold'])) 
{
	$_SESSION['gold'] = 0;
}

if (!isset($_SESSION['activities'])) 
{
	$_SESSION['activities'] = array();
}
?>

<!DOCTYPE html>
<html lang= "en">
	<head>
	    <title>Ninja Gold Game</title>
		<meta charset= "UTF-8">
	    <link rel="stylesheet" href="style.css">
    </head>
	
	<body>
		<div id="container">
			<h1>Ninja Gold Game</h1>
			<div id="score">
				<h2>Your Gold:</h2>
				<p><?= $_SESSION['gold'] ?></p>
			</div>

			<form action= "process.php" method="post" class="location">
				<input type="hidden" name="farm" value="farm">
				<h2>Farm</h2>
				<h3>(earns 10-20 golds)</h3>
				<button class="btn" type="submit">Find Gold!</button>
			</form>

			<form action= "process.php" method="post" class="location">
				<input type="hidden" name="cave" value="cave">
				<h2>Cave</h2>
				<h3>(earns 5-10 golds)</h3>
				<button class="btn" type="submit">Find Gold!</button>
			</form>

			<form action= "process.php" method="post" class="location">
				<input type="hidden" name="house" value="house">
				<h2>House</h2>
				<h3>(earns 2-5 golds)</h3>
				<button class="btn" type="submit">Find Gold!</button>
			</form>

			<form action= "process.php" method="post" class="location">
				<input type="hidden" name="casino" value="casino">
				<h2>Casino</h2>
				<h3>(earns/takes 0-50 golds)</h3>
				<button class="btn" type="submit">Find Gold!</button>
			</form>

			<h2 id="actTitle">Activities:</h2>
			<div id="message">
<?php
				for($i = count($_SESSION['activities'])-1; $i >= 0; $i--) 
				{
					echo $_SESSION['activities'][$i];
			 	}
?>				
			</div>
			
			<form action="reset.php" id="reset">
				<button id="newGameBtn" type="submit">Start New Game</button>
			</form>

		</div>
	</body>
</html>