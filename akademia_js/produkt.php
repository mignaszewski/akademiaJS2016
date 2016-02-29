<div class = "			col-lg-6 	col-md-6 	col-sm-12 	col-xs-12 	pole">
	<div class = "		col-lg-3 	col-md-3 	col-sm-3 	col-xs-3 	maly">
		<div class = "	col-lg-12 	col-md-12 	col-sm-12 	col-xs-12 	zdjecie">
			<a href = "#">
				<img src='img/{{prod.zdjecie}}.jpg'/>
			</a>
		</div>
		<div class = "	hidden-lg 	col-md-12 	hidden-sm 	col-xs-12 	dodaj_mala">
			<h2>{{prod.cena}} zł</h2>
			<form action = "koszyk_produkt_dodaj.php" method = "post">
				<input type = "hidden" name = "id_produktd" value = "{{prod.id}}" />
				<input type = 'submit' name = 'do koszyka' value = 'dodaj' class = 'submit'/>
			</form>
		</div>
	</div>
	<div class = "		col-lg-9 	col-md-9 	col-sm-9 	col-xs-9 	duzy">
		<div class = "	col-lg-9 	col-md-12 	col-sm-9 	col-xs-12 opis">
			<a href = '#'>
				<h1>{{prod.nazwa}}</h1>
			</a>
			<p>{{prod.opis}}</p>
		</div>
		<div class = "	col-lg-3 	hidden-md 	col-sm-3 	hidden-xs 	dodaj_duza">
			<h2>{{prod.cena}} zł</h2>
			<form action = "koszyk_produkt_dodaj.php" method = "post">
				<input type = "hidden" name = "id_produktd" value = "{{prod.id}}" />
				<input type = 'submit' name = 'do koszyka' value = 'dodaj' class = 'submit'/>
			</form>
		</div>
	</div>
</div>