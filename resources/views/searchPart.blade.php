@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid d-flex partSearch">
        <div class="row flex-fill">
            <div class="col-md-6 carSearchBar ">
                <br>
                <h3>Trazi komponente <a href="searchcar" class="btn btn-outline-primary btn-rounded"><-- Trazi automobile</a></h3>
                <form action="searchPart" method="GET">
                    @csrf
                    <div class="input-group">
                        <input type="search" name="queryP" class="form-control rounded" placeholder="Trazi" aria-label="Search"
                        aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary">Trazi</button>
                      </div>
                    </form>
                <hr>
            </div>

            @if (isset($parts))
                <div class="row m-0 pt-5 bg-light justify-content-center">
                        @if (count($parts) > 0)
                        @foreach ($parts as $part )
                        <div class="col-md-3 itemsShop">
                            <hr>
                            <img src="{{ asset('images/' . $part->image_path) }}" alt="" height="200px" width="100%">
                            <div class="col-md-12">
                                <hr>
                                <p>{{ $part->id }} | {{ $part->imeDijela }} | {{ $part->marka }} | {{ $part->model }} | {{ $part->godina }}</p>
                                <hr>
                                <pre>Stanje:{{ $part->stanje }}     Sifra dijela:{{ $part->sifra }}</pre>
                                <hr>
                                <div class="text-center">
                                    <b>{{ $part->cijena }}</b>
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modal{{$part->sifra}}">Dodatno</button>
                                    <hr>
                                </div>
                                <div class="modal fade" id="modal{{$part->sifra}}" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Dodatne informacije:</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ asset('images/' . $part->image_path) }}" alt="" height="300px" width="100%">
                                                <hr>
                                                <p>Prodavac:</p>
                                                <ul>
                                                    <li>Korisnik:{{ $part->korisnik }}</li>
                                                    <li>Email:{{ $part->email }}</li>
                                                    <li>Telefon:{{ $part->phonenumber }}</li>
                                                </ul>
                                                <hr>
                                                <p>Informacije o dijelu:</p>
                                                <ul>
                                                    <li>{{$part->imeDijela}}</li>
                                                    <li>{{$part->marka}}</li>
                                                    <li>{{$part->model}}</li>
                                                    <li>{{$part->godina}}</li>
                                                    <li>{{$part->stanje}}</li>
                                                </ul>
                                                <hr>
                                                <p>Dodatne informacije:</p>
                                                <p>{{$part->info}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        @endforeach
                    @endif
                    <div class="pagination-block">
                        {{ $parts->links('layouts.pagination') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@endsection