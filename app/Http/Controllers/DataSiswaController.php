<?php

namespace App\Http\Controllers;

class DataSiswaController extends Controller
{
    public function dataSiswa()
    {
        $nama = 'Agung Wahyudi';
        return $nama;
    }
    public function dataSiswi()
    {
        $nama = 'Kayla Rahmanisa';
        return $nama;
    }
    public function nama($nama)
    {
        return "Nama Anda Adalah : " . $nama;
    }
}
