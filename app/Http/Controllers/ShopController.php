<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function index(){
        return view('/shops');
    }

    function prijavi(Request $request){

        if($request->has('quick')){
            
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '1',
                'mehanicar' => 'QuickFix',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }
        elseif($request->has('mate')){
           
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '2',
                'mehanicar' => 'Mate Mehanicar',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }
        elseif($request->has('amc')){
           
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '3',
                'mehanicar' => 'Auto Mehanicar ci',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }
        elseif($request->has('lsc')){
           
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '4',
                'mehanicar' => 'Los Santos Customs',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }
        elseif($request->has('autoshop')){
           
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '5',
                'mehanicar' => 'Auto Shop',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }
        elseif($request->has('brzo')){
           
            $query = DB::table('shops')->insert([

                'id_mehanicara' => '6',
                'mehanicar' => 'Brzo Popravi',
                'id_klijenta' => Auth::user()->id,
                'klijent' => Auth::user()->name,
                'ime' => $request->input('ime'),
                'email' => $request->input('email'),
                'brojtel' => $request->input('brojtel'),
                'podatciVoz' => $request->input('podatciVoz'),
                'vinAuta' => $request->input('vinAuta'),
                'objasnjene' => $request->input('objasnjene')
            ]);
        }

        if($query){

            return back()->with('success','Uspjesno ste se prijavili');

        }else{

            return back()->with('fail','Dogodila se greska');
        }
        
    }
}
