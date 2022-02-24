@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid carSearch">
        <div class="row flex-fill">
            <div class="col-md-6 carSearchBar ">
                <br>
                <h3>Trazi automobile <a href="searchPart" class="btn btn-outline-primary btn-rounded">Trazi komponente --></a></h3>
                <br>
                <form action="searchcar" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="query" class="form-control rounded" placeholder="Trazi" aria-label="Search"
                    aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">Trazi</button>
                  </div>
                </form>
                <hr>
        </div>
        
        @if (isset($cars))
        <div class="row m-0 pt-5 bg-light justify-content-center">
            @if (count($cars) > 0)
            @foreach ($cars as $car )
            <div class="col-md-3 itemsShop">
                <hr>
                <img src="{{ asset('images/' . $car->image_path) }}" alt="" height="200px" width="100%">
                <div class="col-md-12">
                    <hr>
                    <p>{{ $car->id }} | {{ $car->marka }} | {{ $car->model }} | {{ $car->godina }}</p>
                    <p>Kilometraza:{{ $car->kilometraza }}</p>
                    <p>Transmisija:{{ $car->transmisija }} | Gorivo:{{ $car->gorivo }} </p>
                    <p>Boja:{{$car->boja}} | Klasa:{{$car->klasa}}</p>
                    <hr>
                    
                    <hr>
                    <div class="text-center">
                        <b>{{ $car->cijena }}</b>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal{{$car->vin}}">Dodatno</button>
                        <hr>
                    </div>
                    <div class="modal fade" id="modal{{$car->vin}}" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Dodatne informacije:</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/' . $car->image_path) }}" alt="" height="300px" width="100%">
                                    <hr>
                                    <p>Prodavac:</p>
                                    <ul>
                                        <li>Korisnik:{{ $car->korisnik }}</li>
                                        <li>Email:{{ $car->email }}</li>
                                        <li>Telefon:{{ $car->phonenumber }}</li>
                                    </ul>
                                    <hr>
                                    <p>Informacije o automobilu</p>
                                    <ul>
                                        <li>{{ $car->marka }}</li>
                                        <li>{{ $car->model }}</li>
                                        <li>{{ $car->godina }}</li>
                                        <li>{{ $car->kilometraza }}</li>
                                        <li>{{ $car->transmisija }}</li>
                                        <li>{{ $car->gorivo }}</li>
                                        <li>{{ $car->boja }}</li>
                                        <li>{{ $car->klasa }}</li>  
                                    </ul>
                                    <hr>
                                    <p>Dodatno</p>
                                    <p>{{ $car->info }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            @endforeach
        @endif
        <div class="pagination-block">
            {{ $cars->links('layouts.pagination') }}
        </div>
    </div>
                             
        @endif
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> 


@endsection