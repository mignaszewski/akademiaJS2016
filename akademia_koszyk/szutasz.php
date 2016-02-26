<?php
	session_start();
	
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if(isset($_SESSION['id']))
		$id_login = $_SESSION['id'];
	else
		$id_login = 0;
?>

<div class='container'>
	<div class = 'row'>
		<div class = 'col-lg-12 	col-md-12 	col-sm-12 	col-xs-12 tytul'>
			<i><b>Szutasz</b></i>
		</div>
	</div>
</div>

<?php
	$zapytanie = "SELECT * FROM `produkt` WHERE id_kategoria = '4' ORDER BY nazwa ASC";
	if($query = @$polaczenie->query($zapytanie))
	{
		$wierszy = $query->num_rows;
		if($wierszy > 0)
		{
			while($wiersz = $query->fetch_assoc())
			{
?>
				<div class="container">
					<div class = "row">
						<?php
							require "produkt.php";
									
							if($wiersz = $query->fetch_assoc())
								require "produkt.php";
						?>
					</div>
				</div>
<?php
			}
		}
	}
?>