<?php

namespace App\Http\Controllers;

use App\event;
use App\userev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class loginControler extends Controller
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $check=userev::where('email','=',\request('uname'))->first();
        if($check===null) {
            return back()->with('fails', 'Email does not Exists ');;
        }
        else{
            if($check->password==\request('psw')){
                $request->session()->put('userID',$check);
                if($check->role=="user") {
                    return redirect('participant');
                }
                else {
                    return redirect('organiser');
                }
            }
            else{
                return back()->with('fails', 'Password is incorrect');;
            }
        }
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
