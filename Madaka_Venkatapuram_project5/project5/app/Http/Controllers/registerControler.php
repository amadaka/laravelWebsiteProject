<?php

namespace App\Http\Controllers;

use App\Mail\registerMail;
use App\userev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class registerControler extends Controller
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $check=userev::where('email','=',\request('email'))->first();
        if($check===null) {
            $userev = new userev;
            $userev->name = \request('name');
            $userev->email = \request('email');
            $userev->password = \request('password');
            $userev->nation = \request('nation');
            $userev->phone = \request('phone');
            $userev->role=\request('role');
            $userev->save();
            $request->session()->put('userID',$userev);
            if($userev->role=="user"){
                Mail::to('test@gmail.com')->send(new registerMail($userev));
                return redirect('participant');
            }
            else{
                Mail::to('test@gmail.com')->send(new registerMail($userev));
                return redirect('organiser');
            }
        }
        else{
            return back()->with('fail', 'Email already exists');
        }

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
     * @param  \App\userev  $userev
     * @return \Illuminate\Http\Response
     */
    public function destroy(userev $userev)
    {
        //
    }
}
