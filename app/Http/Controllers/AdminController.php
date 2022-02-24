<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index(){

        $users = DB::table('users')->get();
        $cars = DB::table('cars')->get();
        $parts = DB::table('parts')->get();

        return view('dashboards.admins.index',['users' => $users,'cars' => $cars,'parts' => $parts]);
    }

    function delete($id){

        DB::table('users')->where('id', $id)->delete();

        return redirect('admin/dashboard');
    }

    function deleteCar($id){

        DB::table('cars')->where('id', $id)->delete();

        return redirect('admin/dashboard');
    }

    function deletePart($id){

        DB::table('parts')->where('id', $id)->delete();

        return redirect('admin/dashboard');
    }

    function profile(){
        return view('dashboards.admins.profile');
    }
    function settings(){
        return view('dashboards.admins.settings');
    }
}
