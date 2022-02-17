<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\customer;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function display(){
        return view('homepage');

    }

    public function formselection(){
        return view('form');
    }


    public function formpengguna(Request $request){
        $user = new customer;
        
        $user->name = $request->name;
        $user->IC = $request->IC;
        $user->Address = $request->Address;
        

        $user->save();

        return view('homepage');    

    }
}

