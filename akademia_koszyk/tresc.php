
<?php
	$zapytanie2 = "SELECT * FROM `kategoria` ORDER BY nazwa DESC";
	if ($rezultat2 = @$polaczenie->query($zapytanie2))
	{
		$wynikow2 = $rezultat2->num_rows;
		if ($wynikow2 > 0)
		{
			while($wiersz2 = $rezultat2->fetch_assoc())
			{
?>
				<div ng-show = 'menu.sprawdz("<?php echo $wiersz2['nazwa']?>")'>
					<?php
						$_SESSION['menu'] = $wiersz2['id'];
						require "kategoria.php";
					?>
				</div>
<?php
			}
		}
	}
?>