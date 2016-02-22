<div class="container">
	<div class = "row">
		<div class = "			col-lg-8 	col-md-8 	col-sm-12 	col-xs-12 	col-lg-offset-2 	col-md-offset-2 col-sm-offset-0 col-xs-offset-0 pole">
			<div class = "nadlista">
				<div class = "col-log-2 col-md-2 col-sm-3 col-xs-4 lista zrobione">
					<p>koszyk</p>
				</div>
				<div class = "col-log-2 col-md-2 col-sm-3 col-xs-4 lista do_zrobienia">
					<p>rodzaj wysyłki</p>
				</div>
				<div class = "col-log-2 col-md-2 col-sm-3 col-xs-4 lista do_zrobienia">
					<p>dane kontaktowe</p>
				</div>
				<div class = "col-log-2 col-md-2 col-sm-3 hidden-xs lista do_zrobienia">
					<p>forma płatności</p>
				</div>
				<div class = "col-log-2 col-md-2 hidden-sm hidden-xs lista do_zrobienia">
					<p>potwierdzenie</p>
				</div>
				<div class = "col-log-2 col-md-2 hidden-sm hidden-xs lista do_zrobienia">
					<p>status</p>
				</div>
			</div>
		</div>
		<div class = "			col-lg-2 	col-md-2 	col-sm-0 	col-xs-0 	pole"></div>
	</div>
</div>

<table>
	<!-- zapytanie -->
		<tr>
			<td>
				<div class="container">
					<div class = "row">
						<div class = "			col-lg-6 	col-md-6 	col-sm-12 	col-xs-12 	col-lg-offset-3 	col-md-offset-3 col-sm-offset-0 col-xs-offset-0 pole tabela_kolor1 tabela">
							<?php
								require "koszyk_produkt.php";
							?>
						</div>
						<div class = "			col-lg-3 	col-md-3 	col-sm-0 	col-xs-0 	pole"></div>
					</div>
				</div>
			</td>
		</tr>
		<!-- kolejna linia w tabeli -->
		<tr>
			<td>
				<div class="container">
					<div class = "row">
						<div class = "			col-lg-6 	col-md-6	col-sm-12 	col-xs-12 	col-lg-offset-3 	col-md-offset-3 col-sm-offset-0 col-xs-offset-0 pole tabela_kolor2 tabela">
							<?php
								require "koszyk_produkt.php";
							?>
						</div>
						<div class = "			col-lg-3 	col-md-3 	col-sm-0 	col-xs-0 	pole"></div>
					</div>
				</div>
			</td>
		</tr>
	<!-- koniec pętli -->
</table>




<div class="container">
	<div class = "row">
		<div class = "col-lg-6 	col-md-6	col-sm-12 	col-xs-12 	col-lg-offset-3 	col-md-offset-3 col-sm-offset-0 col-xs-offset-0 pole">
			<a href = "index.php">
				<input type = "button" name = "zaloguj" value = "<< kontynuuj zakupy" class = "koszyk" style = "float: left"/>
				</a>
			<input type = "submit" name = "rejestracja" value = "dalej >>" class = "koszyk" style = "float: right"/>
		</div>
		<div class = "			col-lg-3 	col-md-3 	col-sm-0 	col-xs-0 	pole"></div>
	</div>
</div>