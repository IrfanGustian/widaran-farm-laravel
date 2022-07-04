<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sapi;

class SapiController extends Controller
{
    public function index(){
        return view('daftarsapi', [
            "data_sapi" => Sapi::all()
        ]);
    }

    public function show(Sapi $sapi){

        if ($sapi->trans_id !== null) {
            return redirect("/daftarsapi");
        }

        return view('pembayaran', [
            "data_sapi" => $sapi
        ]);
    }
    
}
