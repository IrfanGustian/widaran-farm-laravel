<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sapi;

class SapiController extends Controller
{
    public function index(){
        $sapi = Sapi::latest();
        $sapi_slider = Sapi::all();

        if (request('search')) {
            $sapi->where('nama_sapi', 'like', '%' . request('search') . '%')
                ->orWhere('deskripsi', 'like', '%' . request('search') . '%')
                ->orWhere('harga', 'like', '%' . request('search') . '%');
        }

        request('search');

        return view('daftarsapi', [
            "data_sapi" => $sapi->paginate(6),
            "sapi_slider" => $sapi_slider
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
