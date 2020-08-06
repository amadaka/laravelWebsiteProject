<?php

namespace App\Http\Controllers;

use App\participent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $eventID
     * @return \Illuminate\Http\Response
     */
    public function index(int $eventID)
    {
        $viewings=DB::table('participents')->join('userevs','participents.userId','=','userevs.id')->select('userevs.*','participents.id as partiId','participents.eventId')->where('eventId','=',$eventID)->get();
        return view('viewing')->with('viewings',$viewings);
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
     * @param int $eventID
     * @return \Illuminate\Http\Response
     */
    public function show(int $eventID)
    {
        return redirect('view2ing')->with('eventID',$eventID);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\participent  $participent
     * @return \Illuminate\Http\Response
     */
    public function edit(participent $participent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\participent  $participent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, participent $participent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $participent
     * @param int $eventID
     * @return void
     */
    public function destroy(int $participent,int $eventID)
    {
        DB::table('participents')->where('id','=',$participent)->delete();
        $viewings=DB::table('participents')->join('userevs','participents.userId','=','userevs.id')->select('userevs.*','participents.id as partiId','participents.eventId')->where('eventId','=',$eventID)->get();
        return view('viewing')->with('viewings',$viewings);
    }
}
