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
				<div class="container">
					<div class = "row">
						<?php
							require "produkt.php";
						?>
						<?php
							require "produkt.php";
						?>
					</div>
				</div>
			</div>
			
			<div id = "stopka">
				<?php
					require_once "stopka.php";
				?>
			</div>
		</div>
	</body>

</html>