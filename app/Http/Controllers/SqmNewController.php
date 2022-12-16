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
        //
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
