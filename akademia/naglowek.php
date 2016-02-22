
				<div class="container">
					<div class = "row">
					<!-- ********** logo ********** -->
<a href="#home" title = "Strona domowa">
	<div class = "col-lg-1 col-md-1 col-sm-1 col-ms-1 col-xs-4" style = "cursor: pointer;">
		<img src = "img/chomik.jpg"/>
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
			<div style = "cursor: pointer;" onclick="show_menu('menu_koszyk')">
				<a href = "#" title = "koszyk">
					<i class="icon-basket-1"></i>
				</a>
			</div>
			<ul id = "menu_koszyk" class = "ukryj"> <!-- element rozwijalny -->
				<li>
					<?php
						if($id_login > 0)
						{
							require "koszyk_produkt_mini.php";
					?>
							<a href = "koszyk.php">
								<input type = "button" name = "koszyk" value = "koszyk" class = "koszyk" style = "float: right"/>
							</a>
					<?php
						}
						else
						{
							echo "<p>Drogi użytkowniku!<br/>
							Aby móc dodać pozycje do koszyka musisz być zalogowany ;)</p>";
						}
					?>
				</li>
			</ul>
		</li>
	</ol1>
</div>
				
<!-- ********** WYLOGUJ ********** -->
<div class = "col-lg-1 col-md-1 col-sm-1 col-ms-1 col-xs-4 przycisk">
	<ol1>
		<li>
			<?php
				if($id_login > 0)
				{
			?>
					<div style = "cursor: pointer;" onclick="show_menu('menu_wyloguj')">
						<a href = "#" title = "profil">
							<i class="icon-user"></i>
						</a>
					</div>
					<ul id = "menu_wyloguj" class = "ukryj"> <!-- element rozwijalny -->
						<li style = "padding: 0 10px;">
							<a href = "#" title = "profil">
								profil
							</a>
						</li>
						<li style = "padding: 0 10px;">
							<a href = "wyloguj.php" title = "wyloguj">
								historia
							</a>
						</li>
						<li style = "padding: 0 10px;">
							<a href = "wyloguj.php" title = "wyloguj">
								wyloguj
							</a>
						</li>
					</ul>
			<?php
				}
				else
				{
			?>
					<div style = "cursor: pointer;" onclick="show_menu('menu_zaloguj')">
						<a href = "#" title = "Zaloguj">
							<i class="icon-users"></i>
						</a>
					</div>
					<ul id = "menu_zaloguj" class = "ukryj"> <!-- element rozwijalny -->
						<li><?php
								require "logowanie.php";
							?>
						</li>
					</ul>
			<?php
				}
			?>
		</li>
	</ol1>
</div>
				
<div style = "clear: both;"></div>
				
<!-- ********** PASEK ********** -->
<div class = "pasek">
	<!-- ********** MENU ********** -->
	<div class = "menu">
		<div class='container'>
			<div class = 'row'>
				<div class = 'col-lg-12 	col-md-12 	col-sm-12 	hidden-xs'>
					<ol>
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
										<li>
											<a href = "#<?php echo $wiersz2['nazwa']?>">
												<?php 
													echo $wiersz2['nazwa']?>
											</a>
										</li>
						<?php
									}
								}
							}
						?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
					</div>
				</div>