
	<?php
		$suma = 0;
		
		$query = "SELECT * FROM `koszyk` WHERE id_sesja = '".$_SESSION['sesja']."';";
		if($rezultat = @$polaczenie->query($query))
		{
			$wynikow = $rezultat->num_rows;
			if($wynikow > 0)
			{
				while($wiersz = $rezultat->fetch_assoc())
				{
					$query2 = "SELECT * FROM `produkt` WHERE id = '".$wiersz['id_produkt']."' ORDER BY id_kategoria DESC";
					if ($rezultat2 = @$polaczenie->query($query2))
					{
						$wynikow2 = $rezultat2->num_rows;
						if($wynikow2 > 0)
						{
							while($wiersz2 = $rezultat2->fetch_assoc())
							{
								$suma = $suma + $wiersz['ilosc'] * $wiersz2['cena'];
	?>
								<div class = "koszyk_menu">
									<div style = "float: left; width: 70px;">
										<a href = "#">
											<?php
												echo "<img src='img/".$wiersz2['zdjecie'].".jpg'/>";
											?>
										</a>
									</div>
									<div style = "float: left; width: 98px;">
										<div class = "opis">
											<a href = "#">
												<?php
													echo "<h5>".$wiersz2['nazwa']."</h5>";
												?>
											</a>
											<?php
												echo "<h5>".$wiersz['ilosc']." x ".$wiersz2['cena']." zł</h5>";
											?>
										</div>
									</div>
									<div style = "float: left; width: 30px;">
										<div class = "usun">
											<div class = "x">
												<form action = "koszyk_maly_usun.php" method = "post">
													<input type = "hidden" name = "id_produktd" value = "<?php echo $wiersz2['id']; ?>" />
													<input type = "submit" name = "zaloguj" value = "x" class = "koszyk_maly_x"/>
												</form>
											</div>
											<div class = "plus_minus">
												<form action = "koszyk_maly_plus.php" method = "post">
													<input type = "hidden" name = "id_produktd" value = "<?php echo $wiersz2['id']; ?>" />
													<input type = "submit" name = "zaloguj" value = "+" class = "koszyk_maly"/>
												</form>
											</div>
											<div class = "plus_minus">
												<form action = "koszyk_maly_minus.php" method = "post">
													<input type = "hidden" name = "id_produktd" value = "<?php echo $wiersz2['id']; ?>" />
													<input type = "submit" name = "zaloguj" value = "-" class = "koszyk_maly"/>
												</form>
											</div>
										</div>
									</div>
									<div style = "clear: both;"></div>
								</div>
	<?php
							}
						}
					}
				}
			}
		}
	?>