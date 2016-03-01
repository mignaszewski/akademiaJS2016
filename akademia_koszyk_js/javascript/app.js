var app = angular.module('sklep', []);

//******************** ROUTING ********************
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.

      when('/home', {
	templateUrl: 'index_pokaz.php'
      }).

      when('/jajka', {
	templateUrl: 'jajka.php'
      }).

      when('/origami', {
	templateUrl: 'origami.php'
      }).

      when('/szutasz', {
	templateUrl: 'szutasz.php'
      }).

      when('/szydelko', {
	templateUrl: 'szydelko.php'
      }).

      when('/koszyk', {
	templateUrl: 'koszyk_tabela.php'
      }).

      otherwise({
	templateUrl: 'index_pokaz.php'
      });
}])();

app.controller('tabela', [function($scope)
{
	// ******************** UZYTKOWNICY ********************
	this.uzytkownik = uzytkownicy;
	
	var uzytkownicy = 
	{
		[
			id : '1',
			login : 'admin',
			haslo : 'admin',
			email : 'admin@wp.pl',
			data_utworzenia : '2016-02-09 11:54:08',
			data_usuniecia : ''
		],
		
		[
			id : '2',
			login : 'konto',
			haslo : 'konto',
			email : 'konto@wp.pl',
			data_utworzenia : '2016-02-09 11:54:08',
			data_usuniecia : ''
		]
	};		
		
	// ******************** LOGOWANIE ********************
	this.logowanie = logowania;
	
	var logowanie = 
	{
		[
			id : '1',
			id_uzytkownik : '1',
			rodzaj : 'zaloguj',
			data : '2016-02-09 11:54:08'
		],
		
		[
			id : '2',
			id_uzytkownik : '1',
			rodzaj : 'wyloguj',
			data : '2016-02-09 12:13:52'
		],
	};
	
	// ******************** KATEGORIA ********************
	
	this.kategoria = kategorie;
	
	var kategorie = 
	{
		[
			id : '1',
			nazwa : 'Jajka',
			adres : 'jajka.html'
		],
		
		[
			id : '2',
			nazwa : 'Origami',
			adres : 'origami.html'
		],
		
		[
			id : '3',
			nazwa : 'Szutasz',
			adres : 'szutasz.html'
		],
		
		[
			id : '4',
			nazwa : 'Szydelko',
			adres : 'szydelko.html'
		]
	};

	// ******************** PRODUKT ********************
	$scope.produkt = $scope.produkty;
	
	$scope.produkty = 
	{
		[
			id : '1',
			id_kategoria : '',
			nazwa : 'Jajko',
			opis : 'Jajko wykonane z papieru.',
			cena : '6.00',
			ilosc : '5',
			zdjecie : 'origami_jajko'
		],
		
		[
			id : '2', 
			id_kategoria : 
			nazwa : 'Jajko wyklejone',
			opis : 'Jajko wyklejone bibułą.',
			cena : '8.50',
			ilosc : '8',
			zdjecie : 'jajko_bibula'
		],
		
		[
			id : '3',
			id_kategoria : '',
			nazwa : 'Wycinane',
			opis : 'Witraż wykonany w jajku.',
			cena : '9.20',
			ilosc : '3',
			zdjecie : 'jajko_wycinane'
		],
		
		[
			id : '4',
			id_kategoria : '',
			nazwa : 'Kurczak',
			opis : 'Kurczak wykonany z papieru. Może posłużyć za koszyk.',
			cena : '12.35',
			ilosc : '1',
			zdjecie : 'kurczak'
		],
		
		[
			id : '5',
			id_kategoria : '',
			nazwa : 'Aniołek',
			opis : 'Aniołek wykonany na szydełku.',
			cena : '14.90',
			ilosc : '10',
			zdjecie : 'aniolek'
		],
		
		[
			id : '6',
			id_kategoria : '',
			nazwa : 'Bransoletka',
			opis : 'Bransoletka wykonana na szydełku.',
			cena : '8.20',
			ilosc : '6',
			zdjecie : 'bransoletka'
		],
		
		[
			id : '7',
			id_kategoria : '',
			nazwa : 'Sówki',
			opis : 'Kolczyki wykonane z szutaszu.',
			cena : '6.60',
			ilosc : '8',
			zdjecie : 'szutasz_kolczyki'
		],
	};

	// ******************** SESJA ********************
	var sesja = sesje;
	
	var sesje = 
	{
		[
			id : '1',
			id_uzytkownik : '1',
			data : '2016-02-09 09:26:41',
			realizacja : ''
		],
		
		[
			id : '2',
			id_uzytkownik : '1',
			data : '2016-02-09 10:26:41',
			realizacja : '',
		],
		
		[
			id : '3',
			id_uzytkownik : '4',
			data : '2016-02-09 11:26:41',
			realizacja : '',
		],
	};

	// ******************** KOSZYK ********************
	var koszyk = koszyki;
	
	var koszyki = 
	{
		[
			id : '1',
			id_sesja : '1',
			id_produkt : '1',
			ilosc : '1',
			status : 'koszyk'
		],
		
		[
			id : '2',
			id_sesja : '1',
			id_produkt : '2',
			ilosc : '2',
			status : 'koszyk'
		],
	};
});