<?php
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if(isset($_SESSION['id']))
		$id_login = $_SESSION['id'];
	else
		$id_login = 0;
	
	$zapytanie2 = "SELECT * FROM `kategoria` ORDER BY nazwa ASC";
	if ($rezultat2 = @$polaczenie->query($zapytanie2))
	{
		$wynikow2 = $rezultat2->num_rows;
		if ($wynikow2 > 0)
		{
			while($wiersz2 = $rezultat2->fetch_assoc())
			{
				echo "<div class='container'>";
					echo "<div class = 'row'>";
?>
						<a href = "#<?php echo $wiersz2['nazwa']?>">
<?php
							echo "<div class = 'col-lg-12 	col-md-12 	col-sm-12 	col-xs-12 tytul'>";
								echo "<i><b>".$wiersz2['nazwa']."</b></i>";
							echo "</div>";
						echo "</a>";
					echo "</div>";
				echo "</div>";
				$zapytanie = "SELECT * FROM `produkt` WHERE id_kategoria = ".$wiersz2['id']." ORDER BY nazwa ASC";
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
			}
		}
	}
?>