<!-- ********** logo ********** -->
<a href = "index.php" title = "Strona domowa">
	<div class = "col-lg-1 col-md-1 col-sm-1 col-ms-1 col-xs-4" style = "cursor: pointer;">
			logo
	</div>
</a>

<!-- ********** nazwa ********** -->
<a href = "index.php" title = "Strona domowa">
	<div class = "col-lg-2 col-md-2 col-sm-2 col-ms-2 col-xs-8" style = "width: 125px" style = "cursor: pointer;">
			nazwa
	</div>
</a>

<!-- ********** szukaj ********** -->
<div class = "col-lg-7 col-md-7 col-sm-7 col-ms-7 hidden-xs szukaj hidden-ms">
	<i class="icon-search"></i>szukaj
</div>
				
<!-- ********** koszyk ********** -->
<div class = "col-lg-1 col-md-1 col-sm-1 col-ms-1 col-xs-4 przycisk">
	<ol1>
		<li>
			<div style = "cursor: pointer;">
				<a href = "koszyk.php" title = "koszyk">
					<i class="icon-basket-1"></i>
				</a>
			</div>
			<ul> <!-- element rozwijalny -->
				<li>
					<?php
						require "koszyk_produkt_mini.php";
					?>
					<a href = "koszyk.php">
						<input type = "button" name = "koszyk" value = "koszyk" class = "koszyk" style = "float: right"/>
					</a>
				</li>
			</ul>
		</li>
	</ol1>
</div>
				
<!-- ********** WYLOGUJ ********** -->
<div class = "col-lg-1 col-md-1 col-sm-1 col-ms-1 col-xs-4 przycisk">
	<ol1>
		<li>
			<div style = "cursor: pointer;">
				<a href = "#" title = "Zaloguj">
					<i class="icon-users"></i>
				</a>
			</div>
			<ul> <!-- element rozwijalny -->
				<li>
					<h1>zaloguj się</h1>
						<input type = "text" name = "login" placeholder = " login"class = "formularz"/>
						<input type = "password" name = "haslo" placeholder = " hasło" class = "formularz"/>
						<a href = "#">
							<p> przypomnij hasło</p>
						</a>
						<input type = "submit" name = "zaloguj" value = "zaloguj" class = "koszyk" style = "float: left"/>
						<input type = "submit" name = "rejestracja" value = "zarejestruj" class = "koszyk" style = "float: right"/>
				</li>
			</ul>
		</li>
	</ol1>
</div>
				
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