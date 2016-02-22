<?php
	session_start();
	
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if(isset($_SESSION['id']))
	{
		$id_login = $_SESSION['id'];
		$rodzaj = "wyloguj";
				
		$wyloguj = $polaczenie->prepare("INSERT INTO `logowanie` (`id_uzytkownik`, `rodzaj`) VALUES (?, ?)");
		$wyloguj->bind_param('ds', $id_login, $rodzaj);
		if ($wyloguj->execute() === TRUE)
			echo "<br />dodano";
		else
			echo "<br />nie dodano";
		
		$polaczenie->close(); // zamykamy je tylko w momencie gdy zosta³o otwarte
	}	
	session_unset();
	
	header('Location: index.php');
	
?>