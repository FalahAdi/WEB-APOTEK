<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\obat;

class ObatController extends Controller
{

    //create
    public function tambah(Request $request){
        obat::create([
            'nama'=>$request->nama,
            'harga'=>$request->harga,
        ]);
        // dd($request);
        return redirect('ListObat');
    }

    //update
    public function edit($id){
        $editdata = obat::find($id);
        return view('EditObat', ['data' => $editdata]);
    }

    public function editAction(Request $request){

        obat::where('id', $request->id)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);
        return redirect('ListObat');
    }


    //delete
    public function deleteAction($id){
        $deletedata = obat::find($id);
        $deletedata -> delete();
        return redirect('ListObat');
    }
    
}