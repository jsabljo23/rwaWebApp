@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid d-flex">
        <div class="row flex-fill">
            <div class="col-md-12 topInfoPage">
            </div>  
        </div>
    </div>
    <div class="row flex-fill">
        <div class="col-md-6 text-center frontend">
            <br>
            <h3>Frontend tehnologije</h3>
            <hr>
            <p>HTML/CSS</p>
            <hr>
            <p>JavaScript</p>
            <hr>
            <p>Bootstrap</p>
        </div>
        <div class="col-md-6 text-center backend">
            <br>
            <h3>Backend tehnologije</h3>
            <hr>
            <p>PHP</p>
            <hr>
            <p>Laravel framework</p>
            <hr>
            <p>MySql</p>
        </div>
    </div>
    <div class="row flex-fill">
        <div class="col-md-12 text-center bg-primary">
            <br>
            <a href="https://drive.google.com/file/d/16IE_ppiGiiJknBqF9XktrZOWGWgMnPWM/view?usp=sharing" class="btn btn-info">Dokumentacija</a>
            <br>
            <br>
        </div>
    </div>
</div>

@endsection