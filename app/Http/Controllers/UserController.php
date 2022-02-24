<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        return view('dashboards.users.index');
    }

    function add(Request $request){

        if($request->has('submitCar')){

            $request->validate([

                'image' => 'required|mimes:png,jpg,jpeg',
                'marka' => 'required',
                'model' => 'required',
                'godina' => 'required',
                'mileage' => 'required',
                'vin' => 'required'
            ]);

            $newImageName = time() . "-" . $request->marka .".". $request->image->extension();
            $request->image->move(public_path('images/shopCars'), $newImageName);
            $query = DB::table('cars')->insert([
    
                'marka' => $request->input('marka'),
                'model' => $request->input('model'),
                'godina' => $request->input('godina'),
                'kilometraza' => $request->input('mileage'),
                'vin' => $request->input('vin'),
                'boja' => $request->input('boja'),
                'cijena' => $request->input('cijena'),
                'transmisija' => $request->input('mjenac'),
                'gorivo' => $request->input('gorivo'),
                'klasa' => $request->input('klasa'),
                'info' => $request->input('info'),
                'korisnik' => Auth::user()->name,
                'idKorisnika' => Auth::user()->id,
                'image_path' => $newImageName    
            ]); 

        }elseif($request->has('submitPart')){


           $request->validate([

                'image' => 'required|mimes:png,jpg,jpeg',
                'markaAuta' => 'required',
                'modelAuta' => 'required',
                'godinaAuta' => 'required',
                'imeDijela' => 'required',
                'sifraDijela' => 'required'
                
            ]);

            $newImageName = time() . "-" . $request->marka .".". $request->image->extension();

            $request->image->move(public_path('images/shopParts'), $newImageName);


            $query = DB::table('parts')->insert([

                'marka' => $request->input('markaAuta'),
                'model' => $request->input('modelAuta'),
                'godina' => $request->input('godinaAuta'),
                'imeDijela' => $request->input('imeDijela'),
                'sifra' => $request->input('sifraDijela'),
                'cijena' => $request->input('cijenaDijela'),
                'dioAuta' => $request->input('dioAuta'),
                'stanje' => $request->input('stanje'),
                'info' => $request->input('info'),
                'korisnik' => Auth::user()->name,
                'idKorisnika' => Auth::user()->id,
                'image_path' => $newImageName
                 
            ]);
        }

        if($query){

            return back()->with('success','Podatci uspjesno pohranjeni');

        }else{

            return back()->with('fail','Dogodila se greska');
        }
    }

    /* function addPart(Request $request){

            $request->validate([

                'markaAuta' => 'required',
                'modelAuta' => 'required',
                'godinaAuta' => 'required',
                'imeDijela' => 'required',
                'sifraDijela' => 'required'
                
            ]);

            $queryP = DB::table('parts')->insert([

                'marka' => $request->input('markaAuta'),
                'model' => $request->input('modelAuta'),
                'godina' => $request->input('godinaAuta'),
                'imeDijela' => $request->input('imeDijela'),
                'sifra' => $request->input('sifraDijela'),
                'cijena' => $request->input('cijenaDijela'),
                'dioAuta' => $request->input('dioAuta'),
                'stanje' => $request->input('stanje'),
                'korisnik' => Auth::user()->name,
                'idKorisnika' => Auth::user()->id
                 
            ]);

            if($queryP){

                return back()->with('success','Podatci uspjesno pohranjeni');
    
            }else{
    
                return back()->with('fail','Dogodila se greska');
            }
        }
*/


    function profile(){

        $data = DB::table('cars')->where('idKorisnika','=', Auth::user()->id)->get();
        $data1 = DB::table('parts')->where('idKorisnika','=', Auth::user()->id)->get();
        return view('dashboards.users.profile',['data' => $data,'data1' => $data1]);
    }

    function delete($id){

        DB::table('cars')->where('id', $id)->delete();

        return redirect('user/profile');
    }

    function deletePart($id){

        DB::table('parts')->where('id', $id)->delete();

        return redirect('user/profile');
    }

    function settings(){
        return view('dashboards.users.settings');
    }

    function returnData($userID){

        $user = DB::table('users')->where('id',$userID)->first();

        return ['user' => $user];
    }
}
