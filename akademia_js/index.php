<?php
	session_start();
	
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if(isset($_SESSION['id']))
		$id_login = $_SESSION['id'];
	else
		$id_login = 0;
	
	if(!isset($_SESSION['sesja']))
	{
		$realizacja = 'zamowienie';
		$query = $polaczenie->prepare("INSERT INTO `sesja` (`id_login`, `realizacja`) VALUES (?, ?)");
		$query->bind_param('is', $id_login, $realizacja);
		if ($query->execute() === TRUE)
			echo "<br />dodano";
		else
			echo "<br />nie dodano";
			
		$_SESSION['sesja'] = $polaczenie->insert_id;
	}
?>

<!DOCTYPE HTML>

<html lang = "pl">

	<head>
		<?php
			require_once "glowa.php";
		?>
	</head>
	
	<body ng-app="sklep">
		<div id = "glowny">
			<div class = "naglowek">
				<?php
					require_once "naglowek.php";
				?>
			</div>
			
			<div id = "tresc">
				<div ng-view></div>
			</div>
			<div id = "stopka">
				<?php
					require_once "stopka.php";
				?>
			</div>
		</div>
	</body>

</html>