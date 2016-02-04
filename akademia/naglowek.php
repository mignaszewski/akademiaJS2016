<!-- ********** logo ********** -->
<a href = "index.php" title = "Strona domowa">
	<div class = "przycisk" style = "cursor: pointer;">
			logo
	</div>
</a>

<!-- ********** nazwa ********** -->
<a href = "index.php" title = "Strona domowa">
	<div class = "przycisk" style = "width: 125px" style = "cursor: pointer;">
			nazwa
	</div>
</a>

<!-- ********** szukaj ********** -->
<div id = "szukaj">
	szukaj
</div>
				
<!-- ********** koszyk ********** -->
<div class = "przycisk">
	<ol1>
		<li>
			<div style = "cursor: pointer;">
				<a href = "#" title = "koszyk">
					koszyk
				</a>
			</div>
			<ul> <!-- element rozwijalny -->
				<li>pozycja 1</li>
				<li>pozycja 2</li>
				<li>pozycja 3</li>
			</ul>
		</li>
	</ol1>
</div>
				
<!-- ********** WYLOGUJ ********** -->
<a href = "wyloguj.php" title = "Wyloguj">
	<div class = "przycisk" style = "margin-right: 25px;">
		zaloguj
	</div>
</a>
				
<div style = "clear: both;"></div>
				
<!-- ********** PASEK ********** -->
<div class = "pasek">
	<!-- ********** MENU ********** -->
	<div class = "menu">
		<ol>
			<?php
				if($_SERVER['SCRIPT_NAME'] == 'menu1.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/konto.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/kategoria.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/podkategoria.php')
					echo "<li style = 'background-color: #CC0000 !important;'><a href = 'menu1.php'>Bilans</a></li>";
				else
					echo "<li><a href = 'menu1.php'>Bilans</a></li>";
				if($_SERVER['SCRIPT_NAME'] == '/MUC/transakcje/transakcje.php')
					echo "<li style = 'background-color: #CC0000 !important;'><a href = '../transakcje/transakcje.php'>Zrealizowane</a></li>";
				else
					echo "<li><a href = '../transakcje/transakcje.php'>Zrealizowane</a></li>";
				if($_SERVER['SCRIPT_NAME'] == '/MUC/zaplanowane/zaplanowane.php')
					echo "<li style = 'background-color: #CC0000 !important;'><a href = '../zaplanowane/zaplanowane.php'>Zaplanowane</a></li>";
				else
					echo "<li><a href = '../zaplanowane/zaplanowane.php'>Zaplanowane</a></li>";
				if($_SERVER['SCRIPT_NAME'] == '/MUC/rozliczone/rozliczone.php')
					echo "<li style = 'background-color: #CC0000 !important;'><a href = '../rozliczone/rozliczone.php'>Rozliczone</a></li>";
				else
					echo "<li><a href = '../rozliczone/rozliczone.php'>Rozliczone</a></li>";
			?>
		</ol>
	</div>
	
	<?php
		if($_SERVER['SCRIPT_NAME'] == '/MUC/ustawienia/ustawienia.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/konto/konto.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/kategoria/kategoria.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/podkategoria/podkategoria.php')
		{
	?>
			<div class = "pasek2">
			<div class = "menu">
				<ol>
					<?php
						if($_SERVER['SCRIPT_NAME'] == '/MUC/ustawienia/ustawienia.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../ustawienia/ustawienia.php'>Ustawienia</a></li>";
						else
							echo "<li><a href = '../ustawienia/ustawienia.php'>Ustawienia</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/konto/konto.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../konto/konto.php'>Konto</a></li>";
						else
							echo "<li><a href = '../konto/konto.php'>Konto</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/kategoria/kategoria.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../kategoria/kategoria.php'>Kategoria</a></li>";
						else
							echo "<li><a href = '../kategoria/kategoria.php'>Kategoria</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/podkategoria/podkategoria.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../podkategoria/podkategoria.php'>Podkategoria</a></li>";
						else
							echo "<li><a href = '../podkategoria/podkategoria.php'>Podkategoria</a></li>";
					?>
				</ol>
			</div>
			</div>
	<?php
		}
	?>
	
	<?php
		if($_SERVER['SCRIPT_NAME'] == 'menu1.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/konto.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/kategoria.php' || $_SERVER['SCRIPT_NAME'] == '/MUC/bilans/podkategoria.php')
		{
	?>
			<div class = "pasek2">
			<div class = "menu">
				<ol>
					<?php
						if($_SERVER['SCRIPT_NAME'] == 'menu1.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = 'menu1.php'>Analiza</a></li>";
						else
							echo "<li><a href = 'menu1.php'>Analiza</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/bilans/konto.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../bilans/konto.php'>Konto</a></li>";
						else
							echo "<li><a href = '../bilans/konto.php'>Konto</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/bilans/kategoria.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../bilans/kategoria.php'>Kategoria</a></li>";
						else
							echo "<li><a href = '../bilans/kategoria.php'>Kategoria</a></li>";
						if($_SERVER['SCRIPT_NAME'] == '/MUC/bilans/podkategoria.php')
							echo "<li style = 'background-color: #CC0000 !important;'><a href = '../bilans/podkategoria.php'>Podkategoria</a></li>";
						else
							echo "<li><a href = '../bilans/podkategoria.php'>Podkategoria</a></li>";
					?>
				</ol>
			</div>
			</div>
	<?php
		}
	?>
</div>