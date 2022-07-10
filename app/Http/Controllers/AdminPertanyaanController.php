<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class AdminPertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bantuan', [
            "data_pertanyaan" => Pertanyaan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.updatapertanyaan');
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
            'pertanyaan' => 'required|max:255',
            'jawaban' => 'required|max:255'
        ]);

        Pertanyaan::create($validatedData);
        return redirect('/admin/bantuan')->with('success', 'Data Pertanyaan Baru Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertanyaan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $bantuan)
    {
        //dd($sapi);
        return view('admin.editdatapertanyaan', [
            "data_pertanyaan" => $bantuan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertanyaan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $bantuan)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required|max:255',
            'jawaban' => 'required|max:255'
        ]);

        Pertanyaan::where('id', $bantuan->id)
            ->update($validatedData);
        return redirect('/admin/bantuan')->with('success', 'Data Pertanyaan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertanyaan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $bantuan)
    {
        Pertanyaan::destroy($bantuan->id);
        return redirect('/admin/bantuan');
    }
}
