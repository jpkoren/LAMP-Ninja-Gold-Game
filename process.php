<?php 
session_start();
	
	function fortune($num1, $num2) 
	{
		return rand($num1,$num2);
	}
	
	function logme($location, $reward) 
	{
		date_default_timezone_set('America/Los_Angeles');
		$timeStamp = date('M-d-Y h:i a', time());
		
		if ($reward > 0) 
		{
		return "<h3 class='profit'>In the ".$location." you recieved ".$reward." golds!!! (" .$timeStamp .")</h3>";
		} 
		else 
		{
			$reward = $reward * -1;
			return "<h3 class='loss'>In the ".$location." you lost ".$reward." golds...darn... (" .$timeStamp .")</h3>";
		}
	}

	if (isset($_POST['farm'])) 
	{
		$gold = fortune(10, 20);
		$_SESSION['gold'] += $gold;
		array_push($_SESSION['activities'], logme("Farm", $gold));
	}

	if (isset($_POST['cave'])) 
	{
		$gold = fortune(5, 10);
		$_SESSION['gold'] += $gold;
		array_push($_SESSION['activities'], logme("Cave", $gold));
	}

	if (isset($_POST['house'])) 
	{
		$gold = fortune(2, 5);
		$_SESSION['gold'] += $gold;
		array_push($_SESSION['activities'], logme("House", $gold));
	}

	if (isset($_POST['casino'])) 
	{
		$gold = fortune(-50, 50);
		$_SESSION['gold'] += $gold;
		array_push($_SESSION['activities'], logme("Casino", $gold));
	}
	
	header('location: index.php');
	die();
?>