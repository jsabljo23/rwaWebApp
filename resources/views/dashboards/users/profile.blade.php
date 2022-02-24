@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex">
    <div class="row flex-fill">
            <div class="col-md-4 usrProfile ">
                <img src="{{ asset('images/user.png')}}" alt="" width="100px" height="100px">
                <br>
                <br>
                <h4>Korisnicki profil</h4>
                <hr>
                <p>Korisnicko ime: {{ Auth::user()->name }}</p>
                <p>Email: {{Auth::user()->email}}</p>
                <p>Pridruzen: {{ Auth::user()->created_at }}</p>
                <a href="dashboard" class="btn btn-outline-light btn-rounded"><-- Povratak na pocetnu</a>
                <br>
                <br>
            </div>
            <div class="col-md-8 profileSlika">

            </div>
            <div class="col-md-12 artikli">
                <h4>Popis aktivnih automobila:</h4>
                <hr>
                <div class="bg-light">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Marka</th>
                            <th scope="col">Model</th>
                            <th scope="col">Godina</th>
                            <th scope="col">Cijena</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $car)
                            <tr>
                                <th scope="row">{{ $car->id }}</th>
                                <td>{{$car->marka}}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->godina }}</td>
                                <td>{{ $car->cijena }}</td>
                                <form action="delete/{{ $car->id }}" method="GET">
                                  @csrf
                                  <td><input type="submit" class="btn btn-danger" value="Izbrisi"></td>
                              </form>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 artikliD">
                <h4>Popis aktivnih dijelova:</h4>
                <hr>
                <div class="bg-light">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Marka</th>
                            <th scope="col">Model</th>
                            <th scope="col">Godina</th>
                            <th scope="col">Cijena</th>
                            <th scope="col">Stanje</th>
                            <th scope="col">Sifra</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data1 as $part)
                            <tr>
                                <th scope="row">{{ $part->id }}</th>
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