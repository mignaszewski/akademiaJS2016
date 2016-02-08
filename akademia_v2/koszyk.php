<?php
	session_start();
	$_SESSION['wstecz'] = "index";
?>

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
				<div class="container">
					<div class = "row">
						<?php
							require_once "naglowek.php";
						?>
					</div>
				</div>
			</div>
			
			<div id = "tresc">
						<?php
							require "koszyk_tabela.php";
						?>
			</div>
			
			<div id = "stopka">
				<?php
					require_once "stopka.php";
				?>
			</div>
		</div>
	</body>

</html>