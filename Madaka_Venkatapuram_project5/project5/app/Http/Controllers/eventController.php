<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events= event::where('ownerId','=',$request->session()->get('userID')->id)->get();
        return view('organiser')->with('events',$events);
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
    public function store(Request $request)
    {
        $event=new event;
        $event->name=\request('ename');
        $event->ownerId=$request->session()->get('userID')->id;
        $event->date=\request('edate');
        if($request->hasFile('img')){
            $event->image_loc=$request->img->getClientOriginalName();
            $request->img->move(public_path('/upload'),$event->image_loc);
        }
        $event->time=\request('time');
        $event->location=\request('location');
        $event->description=\request('dis');
        $event->save();

        return redirect('organiser');

    }

    /**
     * Display the specified resource.
     *
     * @param int $eventId
     * @param Request $request
     * @return void
     */
    public function show(int $eventId,Request $request)
    {
        $event = DB::table('events')->where('id', '=', $eventId)->first();
        if($request->session()->get('userID')->role=="admin") {
            return view('detailo')->with('event', $event);
        }
        else{
            return view('detail')->with('event', $event);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $eventId
     * @param Request $request
     * @return void
     */
    public function edit(int $eventId,Request $request)
    {
        $event=DB::table('events')->where('id','=',$eventId)->first();
        $request->session()->put('eventId',$eventId);
        return view('edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        DB::table('events')->where('id','=',$request->session()->get('eventId'))->update(['date'=>\request('edate')]);
        DB::table('events')->where('id','=',$request->session()->get('eventId'))->update(['time'=>\request('time')]);
        DB::table('events')->where('id','=',$request->session()->get('eventId'))->update(['location'=>\request('location')]);
        $request->session()->forget('eventId');
        return redirect('organiser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $event)
    {
        DB::table('events')->where('id','=',$event)->delete();

        return redirect('organiser');
    }
}
