<div class ="content" style = "margin-top: 0">
    <k1>
		<h1>zarejestruj się</h1>
    </k1>
    <div1>
        <?php
            require_once "rozwin_rejestruj.php";
        ?>
    </div1>
	<k2>
		<h1>zaloguj się</h1>
	</k2>
	<div2>
		<form  id = "zaloguj" name = "zaloguj" method = "post" action = "zaloguj.php">
			<input type = "text" name = "login" placeholder = " login"class = "formularz"/>
			<input type = "password" name = "haslo" placeholder = " hasło" class = "formularz"/>
			<a href = "#">
				<p>przypomnij hasło</p>
			</a>
			<input type = "submit" name = "zaloguj" value = "zaloguj" class = "koszyk" style = "float: left"/>
		</form>
	</div2>
</div>