<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    // public function index(){
    //     return view('admin.orders', [
    //         "data_trans" => Transaksi::all()
    //     ]);
    // }

    public function store(Request $request){



        $validated_data = $request->validate([
            'nama_depan' => 'required|max:255',
            'nama_belakang' => 'required|max:255',
            'no_hp' => 'required',
            'email' => 'required|email',
            'alamat_lengkap' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kode_pos' => 'required',
            'sapi_id' => 'required'

        ]);

        
        Transaksi::create($validated_data);

        $data = Transaksi::firstWhere('sapi_id', $validated_data['sapi_id']);

        $sapi = Sapi::find($data->sapi_id);
 
        $sapi->trans_id = $data->id;
        
        $sapi->save();

        return redirect("/success");
        
    }


}

