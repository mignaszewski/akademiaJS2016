<section ng-controller = "Tabela as tabela">
	<section ng-repeat = "kat is tabela.kategoria">
		<div class='container'>
			<div class = 'row'>
				<a href = "#{{ kat.nazwa }}">
					<div class = 'col-lg-12 	col-md-12 	col-sm-12 	col-xs-12 tytul'>
						<i><b>{{ kat.nazwa }}</b></i>
					</div>
				</a>
			</div>
		</div>
		<section ng-repeat = "prod in tabela.produkt">
			<div class="container">
				<div class = "row">
					<section ng-if = "prod.id_kategoria == kat.id">
						<?php
							require "produkt.php";
						?>
					</section>
					<section ng-if = "prod.id_kategoria == kat.id">
						<?php
							require "produkt.php";
						?>
					</section>
				</div>
			</div>
		</section>
	</section>
</section>