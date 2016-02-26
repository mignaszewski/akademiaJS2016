<?php	
	require_once "sql.php"; // wkleja kod z pliku sql.php 
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if(isset($_SESSION['id']))
		$id_login = $_SESSION['id'];
	else
		$id_login = 0;
?>

<div class = "		col-lg-3 	col-md-3 	col-sm-3 	col-xs-3 	maly">
	<div class = "	col-lg-12 	col-md-12 	col-sm-12 	col-xs-12" >
		<a href = "#">
			<img src="img/chomik.jpg"/>
		</a>
	</div>
	<div class = "	hidden-lg 	hidden-md 	hidden-sm 	col-xs-12 	dodaj_mala">
		<h2m>00,00zł</h2m>
	</div>
</div>
<div class = "		col-lg-9 	col-md-9 	col-sm-9 	col-xs-9 	duzy">
	<div class = "	col-lg-8 	col-md-8 	col-sm-8 	col-xs-11 	opis">
		<a href = "#">
			<h1>nazwa</h1>
		</a>
		<p>
			opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis opis 
		</p>
	</div>
	<div class = "	col-lg-3 	col-md-3 	col-sm-3 	hidden-xs 	dodaj_duza">
		<h2>00,00zł</h2>
	</div>
	<div class = "	col-lg-1 	col-md-1 	col-sm-1 	col-xs-1 usun">
		<form>
			<input type = "hidden" name = "id" value = "id"/>
			<input type = "submit" name = "do koszyka" value = "X" class = "submit" style = "background-color: red"/>
		</form>
	</div>
</div>