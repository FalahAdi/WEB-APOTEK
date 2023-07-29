<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\pembelian;
use App\Models\obat;

class PembelianController extends Controller
{
    //create
    public function tambahPembelian(Request $request){
        pembelian::create([
            'namaPembeli'=>$request->namaPembeli,
            'jumlah'=>$request->jumlah,
            'idObat'=>$request->idObat,
        ]);
        // dd($request);
        return redirect('ListPembelian');
    }

    //update

    public function editPembelian($id){
        $editdata = pembelian::find($id);
        $dataobat = obat::all();
        return view('EditPembelian', ['data' => $editdata, 'dataobat' => $dataobat]);
    }

    public function editActionPembelian(Request $request){

        pembelian::where('id', $request->id)->update([
            'namaPembeli' => $request -> namaPembeli,
            'jumlah' => $request -> jumlah,
            'idObat'=> $request -> idObat,
        ]);
        // dd($request);
        return redirect('ListPembelian');
    }

    public function deletePembelian($id){
        $deletedata = pembelian::find($id);
        $deletedata -> delete();
        return redirect('ListPembelian');
    }
    
}