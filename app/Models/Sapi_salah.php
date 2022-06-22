<?php

namespace App\Models;

class Sapi 
{
    private static $data_sapi = [
        [
            "nama_sapi" => "Sapi Hitam Putih (500-699 kg)",
            "deskripsi" => "simply dummy text of the printing and typesetting industry.",
            "harga" => "Rp. 23.500.00",
            "img" => "cow1.png"
        ],
        [
            "nama_sapi" => "Sapi Hitam Putih (500-699 kg)",
            "deskripsi" => "simply dummy text of the printing and typesetting industry.",
            "harga" => "Rp. 25.500.00",
            "img" => "cow2.png"
        ],
        [
            "nama_sapi" => "Sapi Hitam Putih (500-699 kg)",
            "deskripsi" => "simply dummy text of the printing and typesetting industry.",
            "harga" => "Rp. 30.500.00",
            "img" => "cow3.png"
        ],

    ];

    public static function all(){
        return self::$data_sapi;
    }
}
