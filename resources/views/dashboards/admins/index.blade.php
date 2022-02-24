@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex">
    <div class="row flex-fill">
        <div class="col-md-12 adminCar">
            <h4>Popis korisnika:</h4>
            <div class="bg-light">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Email</th>
                            <th scope="col">Uloga</th>
                            <th scope="col">Funkcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @if ($user->role == 0)
                                    <td>Super Admin</td>
                                @endif
                                @if ($user->role == 1)
                                    <td>Admin</td>
                                @endif
                                @if ($user->role == 2)
                                    <td>Korisnik</td>
                                @endif
                                @if ($user->role == 2)
                                <form action="delete/{{ $user->id }}" method="GET">
                                    @csrf
                                    <td><input type="submit" class="btn btn-danger" value="Izbrisi"></td>
                                </form>
                                @endif
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 adminCar">
            <h4>Popis automobila:</h4>
            <div class="bg-light">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> ID Korisnika</th>
                        <th scope="col">Korisnik</th>
                        <th scope="col">Marka</th>
                        <th scope="col">Model</th>
                        <th scope="col">Godina</th>
                        <th scope="col">Cijena</th>
                        <th scope="col">Izbrisi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                        <tr>
                            <th scope="row">{{ $car->id }}</th>
                            <td>{{$car->idKorisnika}}</td>
                            <td>{{$car->korisnik}}</td>
                            <td>{{$car->marka}}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->godina }}</td>
                            <td>{{ $car->cijena }}</td>
                            <form action="deleteCar/{{ $car->id }}" method="GET">
                                @csrf
                                <td><input type="submit" class="btn btn-danger" value="Izbrisi"></td>
                            </form>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 adminCar">
            <h4>Popis komponenta:</h4>
            <div class="bg-light">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col"> ID Korisnika</th>
                        <th scope="col">Korisnik</th>
                        <th scope="col">Ime</th>
                        <th scope="col">Marka</th>
                        <th scope="col">Model</th>
                        <th scope="col">Godina</th>
                        <th scope="col">Cijena</th>
                        <th scope="col">Stanje</th>
                        <th scope="col">Sifra</th>
                        <th scope="col">Izbrisi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($parts as $part)
                        <tr>
                            <th scope="row">{{ $part->id }}</th>
                            <td>{{ $part->idKorisnika }}</td>
                            <td>{{ $part->korisnik }}</td>
                            <td>{{ $part->imeDijela }}</td>
                            <td>{{$part->marka}}</td>
                            <td>{{ $part->model }}</td>
                            <td>{{ $part->godina }}</td>
                            <td>{{ $part->cijena }}</td>
                            <td>{{ $part->stanje }}</td>
                            <td>{{ $part->sifra }}</td>
                            <form action="deletePart/{{ $part->id }}" method="GET">
                                @csrf
                                <td><input type="submit" class="btn btn-danger" value="Izbrisi"></td>
                            </form>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection