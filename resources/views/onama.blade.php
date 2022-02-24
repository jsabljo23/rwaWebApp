@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid d-flex">
        <div class="row flex-fill">
            <div class="col-md-6 antePics text-center">
                <img src="{{url('/images/ante.jpeg')}}" alt="" width="200px" height="300px" >
            </div>
            <div class="col-md-6 infoAnte">
                <br>
                <h3>Osobne informacije</h3>
                <hr>
                <br>
                <p>Ante Galic</p>
                <hr>
                <p>Posusje</p>
                <hr>
                <p>Student racunarstva</p>
                <hr>
                <br>
                <p>Ja sam Ante Galic,roden sam 17.7.1999 u Split zivim u Posusju.Student sam trece godine Racunarstva.
                    Prije sam imao iskustva sa frontend razvojem primarno HTML i CSS.
                    Nisam imao iskustva sam tehnologijama koje trenutno koristimo za backend razvoj mreznih aplikacija.

                </p>
            </div>
        </div>
    </div>
    <div class="row flex-fill">
        <div class="col-md-6 jurePics text-center">
            <img src="{{ url('/images/jure.jpg') }}" alt="" width="200px" height="300px" >
        </div>
        <div class="col-md-6 infoJure">
            <br>
            <h3>Osobne informacije</h3>
            <hr>
            <br>
            <p>Jure Sabljo</p>
            <hr>
            <p>Posusje</p>
            <hr>
            <p>Student racunarstva</p>
            <hr>
            <br>
            <p>Ja sam Jure Sabljo,roden sam 23.7.1999 u Posusju zivim u Posusju.Student sam trece godine Racunarstva.
                Prije sam imao iskustva sa frontend razvojem HTML,CSS i Bootstrap te malo znanja iz PHP-a.
                

            </p>
        </div>
    </div>
</div>

@endsection