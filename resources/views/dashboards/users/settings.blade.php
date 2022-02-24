@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="col-md-12 userBac">
                    <div class="flexbox">
                        <div class="search">
                          <h1>Bok {{ Auth::user()->name }}</h1>
                          <h3>Dobrodosao na CarBuy stranicu</h3>
                          <br>
                          <a href="profile" class="btn btn-outline-light btn-rounded">Prijedi na profil --></a>
                        </div>
                      </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection