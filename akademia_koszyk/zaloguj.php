<?php

	session_start(); // zawsze na samej górze
	
	unset($_SESSION['rejestracji']);
	unset($_SESSION['blad_rejestracji_haslo']);
	unset($_SESSION['blad_rejestracji_email']);
	unset($_SESSION['blad_rejestracji_login']);
	unset($_SESSION['blad_rejestracji']);
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once "sql.php"; /* wkleja kod z pliku sql.php */
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno != 0)
	{
		echo "Error: ".$polaczenie->connect_errno; // kod błędu
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		$haslo_hash = md5($haslo);
		
		if ($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownik WHERE login = '%s' AND haslo = '%s'", mysqli_real_escape_string($polaczenie,$login), mysqli_real_escape_string($polaczenie,$haslo_hash))))
		{
			$wynikow = $rezultat->num_rows;
			if ($wynikow > 0)
			{
				$_SESSION['zalogowany'] = true;

				$wiersz = $rezultat->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['login'] = $wiersz['login']; // sesja
				
				$id_login = $_SESSION['id'];
				$rodzaj = "zaloguj";
				
				$zaloguj = $polaczenie->prepare("INSERT INTO `logowanie` (`id_uzytkownik`, `rodzaj`) VALUES (?, ?)");
				$zaloguj->bind_param('ds', $id_login, $rodzaj);
				
				if ($zaloguj->execute() === TRUE)
					echo "<br />dodano";
				else
					echo "<br />nie dodano";
				
				$query = $polaczenie->query("UPDATE `sesja` SET `id_login` = '".$id_login."' WHERE id = '".$_SESSION['sesja']."';");
				
				unset($_SESSION['blad_logowania']); // usunięcie zmienną błąd
				
				$_SESSION['login'] = "<h2>Witaj ".$login."</h2>";
				
				$rezultat->close(); // czyszczenie pamięci z niepotrzebnych już resultatów
				
				header('Location: index.php');
			}
			else
			{
				echo "<br/>nie ma";
				header('Location: index.php');
			}
		}
		else
		{
			echo "LIETROWKA W KODZIE";
		}
		
		$polaczenie->close(); // zamykamy je tylko w momencie gdy zostało otwarte
	}	
?>