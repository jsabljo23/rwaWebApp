@extends('layouts.app')
@section('content')

<div class="container-fluid d-flex">
    <div class="row flex-fill shops">

        <div class="col-md-3 shopsInvd" style="background-image: url('../images/024meh.jpg'); background-size:cover">
            <h4>QuickFix</h4>
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
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#quickfix">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="quickfix" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>QuickFix je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>quickFix@gmail.com</li>
                            <li>Ante Starcevica 39310 Mostar</li>
                            <li>063-988-766</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijavi" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="quick" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->


        <div class="col-md-3 shopsInvd" style="background-image: url('../images/elektromeh.jpg'); background-size:contain">
            <h4>MatMehanika</h4>
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
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#matemeh">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="matemeh" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>MatMehanika je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>mateMeh@gmail.com</li>
                            <li>Trn 3829 Siroki Brijeg</li>
                            <li>063-958-446</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijavi" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="mate" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->


        <div class="col-md-3 shopsInvd" style="background-image: url('../images/slikameh.jpg'); background-size:contain">
            <h4>Auto mehanicar </h4>
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
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#autocigo">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="autocigo" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>AutoMehanicar je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>autoMeh@gmail.com</li>
                            <li>Zagrebacka 333 Posusje</li>
                            <li>063-958-116</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijava" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="amc" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->


        <div class="col-md-3 shopsInvd" style="background-image: url('../images/lscustoms.jpeg'); background-size:cover">
            <h4 style="color: #0091c2">Los Santos Custom</h4>
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
            <button class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#lsc">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="lsc" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>LSCustoms je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>lsCust@gmail.com</li>
                            <li>Phillips Avn.4 Los Santos</li>
                            <li>063-958-446</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijava" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="lsc" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->


        <div class="col-md-3 shopsInvd" style="background-image: url('../images/autoshop.jpeg'); background-size:contain">
            <h4 style="color: #0091c2">Autoshop</h4>
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
            <button class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#ashop">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="ashop" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>AutoShop je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>aShop@gmail.com</li>
                            <li>Mate Rimca bb Livno</li>
                            <li>063-958-226</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijava" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="autoshop" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->


        <div class="col-md-3 shopsInvd" style="background-image: url('../images/4evershine.png'); background-size:contain">
            <h4>Brzo Popravi</h4>
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
            <button class="btn btn-outline-light " data-bs-toggle="modal" data-bs-target="#brzo">Naruci se</button>
        </div>
        <!--Modal-->
        <div class="modal fade" id="brzo" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p>BrzoPopravi je najbrzi nacin da popravite vas automobil.Sa preko 20 godina iskustva jamcimo sigurnost</p>
                        <ul>
                            <li>brzooo@gmail.com</li>
                            <li>A.B Simica 33 Grude</li>
                            <li>063-444-111</li>
                        </ul>
                        <h4>Zelite se naruciti online</h4>
                        <form action="prijava" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="ime">Unesite vase ime</label>
                                <input type="text" name="ime" id="" class="form-control" placeholder="Alan Turing">
                            </div>
                            <div class="form-group">
                                <label for="email">Unesite vas email</label>
                                <input type="email" name="email" id="" class="form-control" placeholder="email@email.com">
                            </div>
                            <div class="form-group">
                                <label for="brojtel">Unesite broj telefona</label>
                                <input type="text" name="brojtel" id="" placeholder="063-xxx-xxx" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="podatciVoz">Unesite broj podatke o vozilu</label>
                                <input type="text" name="podatciVoz" id="" placeholder="Mercedes E-klasa w213" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="vinAuta">Unesite VIN vozila</label>
                                <input type="text" name="vinAuta" id="" placeholder="MBDBW213HE86BG" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="objasnjene">Objasnite problem</label>
                                <input type="text" name="objasnjene" id="" placeholder="Nece da ide" class="form-control">
                            </div>
                            <hr>
                            <div class="text-center">
                                <input type="submit" name="brzo" class="btn btn-primary" value="Posalji">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Kraj modala-->
        <div class="mb-5">

        </div>
    </div>
</div>

@endsection