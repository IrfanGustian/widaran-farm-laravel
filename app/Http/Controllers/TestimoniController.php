<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;

use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        return view('testimoni', [
            "data_testi" => Testimoni::all()
        ]);
    }

    public function utama()
    {
        return view('index', [
            "data_testi" => Testimoni::all()
        ]);
    }
}
