<?php

namespace App\Http\Controllers;

use App\Models\SqmNew;
use Illuminate\Http\Request;

class SqmNewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bootsrap4Sqm.sqm_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputs.*.inet' => 'required|unique:sqm',
            'inputs.*.ncli' => 'required|unique:sqm'
        ],
        [
            'inputs.*.inet.required' => 'Wajib di isi no NO INTERNET nya ni cuy',
            'inputs.*.inet.unique' => 'data NO INTERNET  sudah ada ',
            'inputs.*.ncli.required' => 'Wajib di isi NCLI ya ni cuy',
            'inputs.*.ncli.unique' => 'data NCLI sudah ada ',
        ]
    
    );
        foreach ($request->inputs as $key => $value){
            SqmNew::create($value);
        }
        return back()->with('success','Udh Kesimpan loh ini');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SqmNew  $sqmNew
     * @return \Illuminate\Http\Response
     */
    public function show(SqmNew $sqmNew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SqmNew  $sqmNew
     * @return \Illuminate\Http\Response
     */
    public function edit(SqmNew $sqmNew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SqmNew  $sqmNew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SqmNew $sqmNew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SqmNew  $sqmNew
     * @return \Illuminate\Http\Response
     */
    public function destroy(SqmNew $sqmNew)
    {
        //
    }
}
