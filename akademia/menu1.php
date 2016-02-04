<!DOCTYPE HTML>

<html lang = "pl">

	<head>
		<?php
			require_once "glowa.php";
		?>
	</head>
	
	<body>
		<div id = "glowny">
			<div class = "naglowek">
				<?php
					require_once "naglowek.php";
				?>
			</div>
			
			<div id = "tresc">
				<div class = "pole_prawe">
					<a href = "#">
						<div class = "zdjecie">
							<img src="chomik.jpg" width="100" height = "100"/>
						</div>
					</a>
					<div class = "opis">
						<a href = "nazwa.php">
							<h1>nazwa</h1>
						</a>
						<p>opis opis opis opis opis opis opis opis opis opis opis opis</p>
					</div>
					<div class = "dodaj">
						<h2>00,00zł</h2>
						<form>
							licznik
							<br/>
							<input type = "submit" name = "do koszyka" value = "dodaj" class = "submit"/>
						</form>
					</div>
					<div style = "clear:both"></div>
				</div>
				<div class = "pole_lewe">
					<div class = "zdjecie"><img src="chomik.jpg" width="100" height = "100"/></div>
					<div class = "opis">opis</div>
					<div class = "dodaj">dodaj</div>
					<div style = "clear:both"></div>
				</div>
				<div style = "clear:both"></div>
			</div>
			
			<div id = "stopka">
				<?php
					require_once "stopka.php";
				?>
			</div>
		</div>
	</body>

</html>