<?php

namespace App\Http\Controllers;

use App\participent;
use http\QueryString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Query;

class participantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $attendings=DB::table('participents')->join('events','participents.eventId','=','events.id')->select('events.*','participents.id as partiID')->where('userId','=',$request->session()->get('userID')->id)->get();
        return view('attending')->with('attendings',$attendings);
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
     * @param int $eventId
     * @param int $userId
     * @return void
     */
    public function store(int $eventId,int $userId)
    {

        $check2=DB::table('participents')->where('eventId','=',$eventId)->where('userId','=',$userId)->first();
        if($check2===null) {
            $participent = new participent;
            $participent->eventId = $eventId;
            $participent->userId = $userId;
            $participent->save();
            return redirect('attending');
        }
        else{
            return back()->with('fail', 'You already joined this event');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\participent  $participent
     * @return \Illuminate\Http\Response
     */
    public function show(participent $participent)
    {
        //
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
     * @param  \App\participent  $participent
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $participent)
    {
        DB::table('participents')->where('id','=',$participent)->delete();
        return redirect('attending');


    }
}
