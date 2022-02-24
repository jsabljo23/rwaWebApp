<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function searchcar(Request $request){

        if(isset($_GET['query'])){
            
            $search_text = $_GET['query'];
            $cars = DB::table('cars')->where('marka','LIKE','%'.$search_text.'%')->
                        join('users', 'idKorisnika', '=', 'users.id')->paginate(3);
            $cars->appends($request->all());
            return view('searchcar',['cars'=>$cars]);

        }else{

            return view('searchcar');
        }   
    }

    function searchPart(Request $request){

        if(isset($_GET['queryP'])){
            
            $search_text = $_GET['queryP'];
            $parts = DB::table('parts')->where('marka','LIKE','%'.$search_text.'%')
                        ->join('users', 'idKorisnika', '=', 'users.id')->paginate(3);
            $parts->appends($request->all());
            return view('searchPart',['parts'=>$parts]);

        }else{

            return view('searchPart');
        }   
    }
}
