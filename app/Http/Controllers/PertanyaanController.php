<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        return view('bantuan', [
            "data_pertanyaan" => Pertanyaan::all()
        ]);
    }
}
