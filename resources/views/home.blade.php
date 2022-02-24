@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row flex-fill">
        <div class="col-md-12 userBac">
            <div class="flexbox">
                <div class="search">
                  <h1>Bok {{ Auth::user()->name }}</h1>
                  <h3>Uspjesno ste se registrirali</h3>
                  <br>
                  <a href="{{ route('user.profile') }}" class="btn btn-outline-light btn-rounded">Prijedi na profil</a>
                  <a href="{{ route('user.dashboard') }}" class="btn btn-outline-light btn-rounded">Prijedi na prodaju</a>
                </div>
              </div> 
        </div>
    </div>
</div>
@endsection
