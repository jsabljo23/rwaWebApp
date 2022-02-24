<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuperAdminController extends Controller
{
    function index(){

        $users = DB::table('users')->get();

        return view('dashboards.superadmins.index',['users' => $users]);
    }

    function delete($id){

        DB::table('users')->where('id', $id)->delete();

        return redirect('superadmin/dashboard');
    }

    function addAdmin($id){

        DB::table('users')->where('id', $id)->update(['role' => 1]);

        return redirect('superadmin/dashboard');
    }

    function deleteAdmin($id){

        DB::table('users')->where('id', $id)->update(['role' => 2]);

        return redirect('superadmin/dashboard');
    }
    
}