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
                            <th scope="col">Izbrisi</th>
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
                                @if ($user->role != 0)
                                <form action="delete/{{ $user->id }}" method="GET">
                                    @csrf
                                    <td><input type="submit" class="btn btn-danger" value="Izbrisi"></td>
                                </form>
                                @endif
                                @if ($user->role == 2)
                                <form action="addAdmin/{{ $user->id }}" method="GET">
                                    @csrf
                                    <td><input type="submit" class="btn btn-info" value="Pretvori u admina"></td>
                                </form>
                                @endif
                                @if ($user->role == 1)
                                <form action="deleteAdmin/{{ $user->id }}" method="GET">
                                    @csrf
                                    <td><input type="submit" class="btn btn-info" value="Ukloni privilegiju"></td>
                                </form>
                                @endif
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">

        </div>
    </div>
</div>
@endsection