@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center">
    <div class="row flex-fill">
        <div class="col-md-12 userBac">
            <div class="flexbox">
                <div class="search">
                  <h1>Bok {{ Auth::user()->name }}</h1>
                  <h3>Klikni na povecalo i pretrazi</h3>
                  <div>
                    <input type="text" placeholder="Trazi . . ." required>
                  </div>
                </div>
              </div> 
        </div>
        <div class="col-md-6 napCar">
            <br>
            <h4>Napredno pretrazivanje automobila</h4>
            <hr>
            <div class="col-md-6 ">
                <label for="selectCar">Marka</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ">
                <label for="selectCar">Model</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ml-3">
                <label for="selectCar">Godina</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ml-3">
                <label for="selectCar">Motor</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 napPart ">
            <br>
            <h4>Napredno pretrazivanje komponenti</h4>
            <hr>
            <div class="col-md-6 ">
                <label for="selectCar">Marka</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ">
                <label for="selectCar">Model</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ml-3">
                <label for="selectCar">Godina</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
            <div class="col-md-6 ml-3">
                <label for="selectCar">Lokacija</label>
                <select class="form-select mb-2" aria-label="Default select example" name="" id="">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
            </div>
        </div>
    </div>
    
</div>
@endsection