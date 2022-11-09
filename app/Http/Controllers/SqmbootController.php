<?php

namespace App\Http\Controllers;

use App\Models\Sqm;
use Illuminate\Http\Request;

class SqmbootController extends Controller
{
    public function index(Request $request){
        
        $sqm = Sqm::all()->sortDesc();
        return view('bootsrap4Sqm.index',compact(['sqm']));
        // $cari = $request->cari;
        // $sqm = Sqm::where('inet','LIKE','%'.$cari.'%')->orderBy('id','DESC')->Paginate(4);
        // return view('sqm.index',compact(['sqm']));
    }
    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            'ncli'=> 'required|unique:sqm' ,
            'inet'=> 'required|unique:sqm'
        ],[
            'ncli.unique' => 'Data NCLI sudah ada di database cari dulu yakan',
            'inet.unique' => 'Data INET sudah ada di database cari dulu yakan',
            'ncli.required' => 'Data NCLI Wajib di Isi guyss',
            'inet.required' => 'Data INET Wajib di Isi guyss'
        ]);
        Sqm::create($request->except(['_token','submit']));
        return redirect('/')->with('message','Berhasil Menambahkan data');
    }
    public function edit($id){
       $sqm = Sqm::find($id);
       return view('sqm.edit',compact(['sqm']));
    }
    public function destroy($id)
    {
        $sqm = Sqm::find($id);
        $sqm->delete();
        return redirect('/')->with('message','Berhasil Hapus Data');
    }
}
