<?php
	session_start();
	
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	print("<pre>");
		print_r($_POST);
	print("</pre>");
	
	print("<pre>");
		print_r($_SESSION);
	print("</pre>");

	$id_produkt = $_POST['id_produktd'];
	
	$query = "SELECT * FROM `koszyk` WHERE id_sesja = '".$_SESSION['sesja']."' AND `id_produkt` = '".$id_produkt."';";
	if($rezultat = @$polaczenie->query($query))
	{
		$wynikow = $rezultat->num_rows;
		if($wynikow > 0)
		{
			$wynik = $rezultat->fetch_assoc();
			$liczba = $wynik['ilosc'] - 1;
			$update = $polaczenie->query("UPDATE `koszyk` SET `ilosc` = '".$liczba."' WHERE `id_sesja` = '".$_SESSION['sesja']."' AND `id_produkt` = '".$id_produkt."';");
		}
	}
	
	header('Location: index.php');
?>