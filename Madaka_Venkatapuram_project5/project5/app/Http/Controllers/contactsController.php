<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use App\contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class contactsController extends Controller
{
    //
    public function index(){
        $contacts=contact::all();
        return view('adminContact')->with('contacts',$contacts);

    }
    public function store(){
    	$data= request()->validate([
    		'name'=>'required',
    		'email'=>'required|email',
    		'subject'=>'required',
    		'message'=>'required',
    	]);
    	$contact= new contact;
    	$contact->name=request('name');
    	$contact->email=request('email');
    	$contact->subject=request('subject');
    	$contact->message=request('message');
    	$contact->save();


    	Mail::to('test@gmail.com')->send(new contactMail($data));

    	return back()->with('success', 'Thanks for contacting us!');
    }

    public function destroy(int $conid){

        DB::table('contacts')->where('id','=',$conid)->delete();

        return redirect('adminContact');
    }
}
