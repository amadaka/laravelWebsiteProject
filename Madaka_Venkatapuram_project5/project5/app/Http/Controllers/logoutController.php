<?php

namespace App\Http\Controllers;

use App\userev;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\userev  $userev
     * @return \Illuminate\Http\Response
     */
    public function show(userev $userev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userev  $userev
     * @return \Illuminate\Http\Response
     */
    public function edit(userev $userev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userev  $userev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userev $userev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        $request->session()->forget('userID');
        $request->session()->flush();
        return redirect('home');
    }
}
