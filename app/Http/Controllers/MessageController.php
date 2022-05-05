<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // $chats = Message::where('source_id', $user->id)->get();
        $chats = Message::distinct()->select('target_id')->where('source_id', $user->id)->get();
        $messages = null;
        return view('front.messages',compact('user','chats','messages'));
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
        $input = $request->all();
        $input['source_id'] = Auth::user()->id;
        
        Message::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $target=User::findOrFail($id);
        $chats = Message::distinct()->select('target_id')->where('source_id', $user->id)->get();
        $user_id=$user->id;
        $messages = Message::where(function($query) use ($user_id, $id){
                $query->where('source_id','=', $user_id)->orWhere('source_id','=', $id);
            })
            ->where(function($query) use ($user_id, $id){
                $query->where('target_id','=', $user_id)->orWhere('target_id','=', $id);
            })
            ->orderBy('created_at','asc')
            ->get();
        return view('front.messages',compact('user', 'target', 'chats','messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
