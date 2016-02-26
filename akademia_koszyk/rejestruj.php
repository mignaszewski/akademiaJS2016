<?php
	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo1'])) || (!isset($_POST['haslo2'])) || (!isset($_POST['email'])))
	{
		header('Location: index.php');
		exit();
	}
	require_once "sql.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	echo "dzialam\n";
	if ($polaczenie->connect_errno != 0)
	{
		echo "Error: ".$polaczenie->connect_errno; // kod błędu
	}
	else
	{
  
		if (isset($_POST['rejestracja']))
		{
			$blad = false;
			$login = $_POST['login'];
			$haslo1 = $_POST['haslo1'];
			$haslo2 = $_POST['haslo2'];
			$email = $_POST['email'];
			
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
			$haslo1 = htmlentities($haslo1, ENT_QUOTES, "UTF-8");
			$haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
			$email = htmlentities($email, ENT_QUOTES, "UTF-8");
			
			if ($login != null && $haslo1 != null && $haslo2 != null && $email != null)
			{
				echo "<br/> wypełnione";
				if ($rezultat1 = @$polaczenie->query(sprintf("SELECT * FROM uzytkownik WHERE login = '%s'", mysqli_real_escape_string($polaczenie,$login))))
				{
					$wynikow1 = $rezultat1->num_rows;
					if ($wynikow1 == 0)
					{
						echo "<br/>login wolny";
						if($rezultat2 = @$polaczenie->query(sprintf("SELECT * FROM uzytkownik WHERE email = '%s'", mysqli_real_escape_string($polaczenie,$email))))
						{
							echo "rejestracja";
							$wynikow2 = $rezultat2->num_rows;
							if ($wynikow2 == 0)
							{
								echo "<br/> email wolny";
								$haslo = md5($haslo1);
								$query = $polaczenie->prepare("INSERT INTO `uzytkownik` (`login`, `haslo`, `email`) VALUES (?, ?, ?)");
								$query->bind_param('sss', mysqli_real_escape_string($polaczenie,$login), mysqli_real_escape_string($polaczenie,$haslo), mysqli_real_escape_string($polaczenie,$email));
								if ($query->execute() === TRUE)
									echo "<br />dodano";
								else
									echo "<br />nie dodano";
								header('Location: index.php');
							}
							else
							{
								echo "<br/> email zajety";
								header('Location: index.php');
							}
						}
						else
						{
							echo "<br/> literówka w emailu ";
						}
					}
					else 
					{
						echo "<br/> login zajety";
						header('Location: index.php');
					}
				}
				else 
					echo "LITEROWKA w loginie";
			}
			else 
			{
				header('Location: index.php');
			}
		}
		else 
			echo "<br />literówka w kodzie.";
		
		$polaczenie->close(); // zamykamy je tylko w momencie gdy zostało otwarte
	}
	
?>