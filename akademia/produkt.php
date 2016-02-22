<div class = "			col-lg-6 	col-md-6 	col-sm-12 	col-xs-12 	pole">
	<div class = "		col-lg-3 	col-md-3 	col-sm-3 	col-xs-3 	maly">
		<div class = "	col-lg-12 	col-md-12 	col-sm-12 	col-xs-12 	zdjecie">
			<a href = "#">
				<?php
					echo "<img src='img/".$wiersz['zdjecie'].".jpg'/>";
				?>
			</a>
		</div>
		<div class = "	hidden-lg 	col-md-12 	hidden-sm 	col-xs-12 	dodaj_mala">
			<?php
				echo "<h2>".$wiersz['cena']." zł</h2>";
			?>
			<form>
				<input type = "submit" name = "do koszyka" value = "dodaj" class = "submit"/>
			</form>
		</div>
	</div>
	<div class = "		col-lg-9 	col-md-9 	col-sm-9 	col-xs-9 	duzy">
		<div class = "	col-lg-9 	col-md-12 	col-sm-9 	col-xs-12 	opis">
			<?php
				echo "<a href = '#'>";
					echo "<h1>".$wiersz['nazwa']."</h1>";
				echo "</a>";
				echo "<p>".$wiersz['opis']."</p>";
			?>
		</div>
		<div class = "	col-lg-3 	hidden-md 	col-sm-3 	hidden-xs 	dodaj_duza">
			<?php
				echo "<h2>".$wiersz['cena']." zł</h2>";
			?>
			<form>
				<?php
					if($id_login > 0)
						echo "<input type = 'submit' name = 'do koszyka' value = 'dodaj' class = 'submit'/>";
				?>
			</form>
		</div>
	</div>

</div>