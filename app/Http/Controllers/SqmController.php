<?php

namespace App\Http\Controllers;

use App\Models\Sqm;
use Illuminate\Http\Request;

class SqmController extends Controller
{
    public function index(Request $request){
        $cari = $request->cari;
        $sqm = Sqm::where('inet','LIKE','%'.$cari.'%')->paginate(5);
        return view('sqm.index',compact(['sqm']));
    }
    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            'ncli'=> 'unique:sqm',
            'inet'=> 'unique:sqm',
        ]);
        Sqm::create($request->except(['_token','submit']));
        return redirect('sqm')->with('message','Berhasil Menambahkan data');
    }
    public function edit($id){
       $sqm = Sqm::find($id);
       return view('sqm.edit',compact(['sqm']));
    }
    public function destroy($id)
    {
        $sqm = Sqm::find($id);
        $sqm->delete();
        return redirect('sqm')->with('message','Berhasil Hapus Data');
    }
}
