function show_menu(id)
{
	var pole = document.getElementById(id);
	
	if(pole.className == "pokaz")
		pole.className = "ukryj";
	else
		pole.className = "pokaz";
}