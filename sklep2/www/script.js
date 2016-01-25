var produkt = new Array(
    new Produkt("Płyta CD",1.23),new Produkt("Płyta dvd", 1.45),new Produkt("Kaseta VHS", 5.23), new Produkt("Płyta CD",1,23), new Produkt("Pendrive",23.51)
);



function Produkt(nazwa, cena){
    this.nazwa = nazwa;
    this.cena = cena;
    this.ilosc = 0;
}

Produkty.prototype.doListyProd = function() {
    var html = "<div class='produkty'>";
    html += "<div class='11'>"+this.nazwa+"</div>";
    html += "<div class='11>"+this.cena+"/szt</div>";
    html += "<div class='rr>";
        html += "input type='text' id='ilosc"+this.nazwa+"' />";
    html += "<a href='#' id='"this.nazwa"'>do koszyka </a>";
} 

function drukuj Produkt() {
    for(var i in produkty){
        html = produkty[i].doListyProd();
    }
}

var prod = document.getElementById("produkty");
prod.innerHTML = html;