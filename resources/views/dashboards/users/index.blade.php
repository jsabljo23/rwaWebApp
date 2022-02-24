@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row flex-fill">
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

        @if (Session::get('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>   
        @endif

        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>   
        @endif

        <div class="col-md-6 napCar">
            <br>
            <h3>Prodajte automobil</h3>
            <hr>
            <form action="add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="image">
                    <hr>
                    <label for="marka">Unesite marku automobila</label>
                    <input type="text" name="marka" id="">
                    <hr>
                    <label for="model">Unesite model automobila</label>
                    <input type="text" name="model" id="">
                    <hr>
                    <label for="godina">Unesite godinu automobila</label>
                    <input type="text" name="godina" id="">
                    <hr>
                    <label for="mileage">Unesite kilomatrazu automobila</label>
                    <input type="text" name="mileage" id="">
                    <hr>
                    <label for="vin">Unesite VIN automobila</label>
                    <input type="text" name="vin" id="">
                    <hr>
                    <label for="boja">Unesite boju automobila</label>
                    <input type="text" name="boja" id="">
                    <hr>
                    <label for="cijena">Unesite cijenu automobila</label>
                    <input type="text" name="cijena" id="">
                    <hr>
                    <label for="info">Unesite informacije:</label>
                    <br>
                    <textarea name="info" id="info" cols="50" rows="10"></textarea>
                    <br>
                    <br>

                    <p>Dodatne informacije:</p>
                    <hr>
                    <div class="dodatno">
                        <label for="mjenac">Transmisija:</label>
                        <select name="mjenac" class="custom-select" >
                            <option value="Automatski">Automatski</option>
                            <option value="Manualni">Manualni</option>
                            <option value="Nema">Nema</option>
                            <option value="Drugo">Drugo</option>
                        </select>

                        <label for="gorivo">Gorivo:</label>
                        <select name="gorivo" class="custom-select">
                            <option value="Benzin">Benzin</option>
                            <option value="Dizel">Dizel</option>
                            <option value="Vodik">Vodik</option>
                            <option value="Elektricno">Elektricno</option>
                        </select>

                        <label for="klasa">Klasa:</label>
                        <select name="klasa" class="custom-select">
                            <option value="Coupe">Coupe</option>
                            <option value="Limuzina">Limuzina</option>
                            <option value="SUV">SUV</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Kabriolet">Kabriolet</option>
                            <option value="Offroad">Offroad</option>
                        </select> 

                    </div>  
                    <br>
                    <input type="submit" class="btn btn-primary" name="submitCar" value="Pohrani">  
                </div>
            </form>
        </div>

        <div class="col-md-6 napPart ">
            <br>
            <h3>Prodajte komponent</h3>
            <hr>
            <form action="add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" name="image">
                    <hr>
                    <label for="markaAuta">Unesite marku automobila</label>
                    <input type="text" name="markaAuta" id="">
                    <hr>
                    <label for="modelAuta">Unesite model automobila</label>
                    <input type="text" name="modelAuta" id="">
                    <hr>
                    <label for="godinaAuta">Unesite godinu automobila</label>
                    <input type="text" name="godinaAuta" id="">
                    <hr>
                    <label for="imeDijela">Unesite ime komponenta</label>
                    <input type="text" name="imeDijela" id="">
                    <hr>
                    <label for="sifraDijela">Unesite sifru komponenta</label>
                    <input type="text" name="sifraDijela" id="">
                    <hr>
                    <label for="cijenaDijela">Unesite cijenu komponenta</label>
                    <input type="text" name="cijenaDijela" id="">
                    <hr>
                    <br>
                    <br>
                    <label for="info">Unesite informacije:</label>
                    <br>
                    <textarea name="info" id="info" cols="50" rows="10"></textarea>
                    <br>
                    <br>

                    <p>Dodatne informacije:</p>
                    <hr>
                    <div class="dodatno">
                        <label for="dioAuta">Dio automobila:</label>
                        <select name="dioAuta" class="custom-select" >
                            <option value="mehanicki">Mehanicki</option>
                            <option value="eksterni">Eksterni</option>
                            <option value="elektronski">Elektronski</option>
                            <option value="sigurnosni">Sigurnosni</option>
                        </select>

                        <label for="stanje">Stanje:</label>
                        <select name="stanje" class="custom-select">
                            <option value="novi">Novi</option>
                            <option value="rabljeni">Rabljeni</option>
                            <option value="zamjenski">Zamjenski</option>
                        </select>
                    </div> 
                    <br>
                    <input type="submit" class="btn btn-primary" name="submitPart" value="Pohrani"> 
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection