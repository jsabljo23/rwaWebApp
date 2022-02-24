@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid d-flex">
        <div class="row flex-fill">
            <div class="col-md-6 searchCar text-center">
            <p class="linkB"><a href="searchcar" class="traziBut">TRAZI AUTOMOBILE</a></p>
            </div>
            <div class="col-md-6 searchPart text-center">
                <p class="linkB"><a href="searchPart" class="traziBut">TRAZI KOMPONENTE</a></p>
            </div>
        </div>
    </div>
    <div class="row flex-fill">
        <div class="col-md-6 infoCar">
            <h3 class="textCar text-uppercase font-weight-bold">Dobro dosli na Carbuy sluzbenu web stranicu.</h3>
            <hr class="p-0 bg-white">
            <p class="textCar">CarBuy je jedna od prvih web stranica u Bosni i Hercegovini kojoj je primarna namjerna prodaja i potrazna automobila,automobilskih dijelova i dodatne opreme.</p>
            <h3 class="textCar text-uppercase font-weight-bold">Kako cu pronaci automobil</h3>
            <hr class="p-0 bg-white">
            <p class="textCar">Na CarBuy web-stranici nalaze se preko stotine automobila za prodaju.Suradujemo sa mnogim autokucama i malim poduzecima.Ako zelite pronaci automobil za vas kliknite na link za pretrazivanje koji se nalazi na pocetnoj stranici</p>
            <h3 class="textCar text-uppercase font-weight-bold">kako cu pronaci dijelove automobila</h3>
            <hr class="p-0 bg-white">
            <p class="textCar">Jedna od dodatnih mogucnosti je i pretrazivanje komponenata(auto-dijelova).Nasi partneri prodavaju sve od originalnih dijelova,rabljenih te i zamjenske dijelove.CarBuy obecava da su dijelovi funkcijonalni,da imaju TUV certifikat i da dolaze od pouzdanih izvora</p>
        </div>
        <div class="col-md-6 infoPart">
            <h3 class="textCar text-uppercase font-weight-bold">Dodatne mogucnosti web stranice</h3>
            <hr class="p-0 bg-white">
            <ul>
                <li class="textCar">Mogucnost prijave</li>
                <li class="textCar">Odabir servisa</li>
                <li class="textCar">Pomoc prilikom kupnje</li>
                <li class="textCar">Prodajte svoje </li>
            </ul>
            <p class="textCar">CarBuy lako omogucuje da postanete nas partner,te da i vi mozete jednostavno i sigurno trgovati svojim automobilima/dijelovima.Suradujemo sa mnogim servisima tako da preko CarBuy stranice jednostavno i brzo mozete rijesit sve probleme oko vaseg automobila</p>
            <p class="textCar">CarBuy donosi i mogucnost financiranja vaseg automobila te opcije leasinga.Ako imate dodatnih pitanja mozete nas kontaktirati na drustvenim mrezama gdje ce vam nasi zaposlenici pomoci i razjasniti</p>
        </div>
    </div>
</div>

@endsection