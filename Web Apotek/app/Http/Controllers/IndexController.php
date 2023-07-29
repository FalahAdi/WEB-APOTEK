<?php

namespace App\Http\Controllers;
use App\Models\obat;
use App\Models\pembelian;


class IndexController extends Controller
{
    Public function Index(){
        return view('index');
    }
    Public function CatatObat(){
        return view('CatatObat');
    }
    Public function CatatPembelian(){
        $data = obat::all();
        return view('CatatPembelian', compact('data'));
    }
    Public function ListObat(){
        $data = obat::all();

        return view('ListObat', compact('data'));

    }
    Public function ListPembelian(){
        $data = pembelian::all();

        return view('ListPembelian', compact('data'));
    }
}
