<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminSapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.datasapi', [
            "data_sapis" => Sapi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.updatasapi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_sapi' => 'required|max:255',
            'slug' => 'required|unique:sapis|max:255',
            'harga' => 'required',
            'deskripsi' => 'required',
            'img' => 'image|file|max:1024'
        ]);

        $validatedData['img'] = $request->file('img')->store('sapi-images');

        Sapi::create($validatedData);
        return redirect('/admin/sapi')->with('success', 'Data Sapi Baru Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sapi  $sapi
     * @return \Illuminate\Http\Response
     */
    public function show(Sapi $sapi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sapi  $sapi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sapi $sapi)
    {
        //dd($sapi);
        return view('admin.editdatasapi', [
            "data_sapis" => $sapi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sapi  $sapi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sapi $sapi)
    {
        $validatedData = $request->validate([
            'nama_sapi' => 'required|max:255',
            'harga' => 'required',
            'deskripsi' => 'required',
            'img' => 'image|file|max:1024'
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('sapi-images');
        }

        Sapi::where('id', $sapi->id)
            ->update($validatedData);
        return redirect('/admin/sapi')->with('success', 'Data Sapi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sapi  $sapi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sapi $sapi)
    {
        Sapi::destroy($sapi->id);
        $teetime = Transaksi::where('sapi_id', '=', $sapi->id)->first();

        if (isset($teetime)) {
            Transaksi::destroy($teetime->id);
        }

        return redirect('/admin/sapi');
    }
}
