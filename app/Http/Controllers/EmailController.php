<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $content=$request->input('message');
        $attach=$request->file('attach');
        Mail::send('emails.email', ['name'=>$name,'email'=>$email,'content'=>$content], function ($message) use ($attach) {
            $message->from('uithelps@gmail.com', 'John Doe');
            $message->sender('uithelps@gmail.com', 'John Doe');
        
            $message->to('hossain.naime@yahoo.com', 'John Doe');
        
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
        
            $message->replyTo('john@johndoe.com', 'John Doe');
        
            $message->subject('Test Email');
        
            $message->priority(3);
        
            $message->attach($attach, [
                        'as' => 'name.pdf',
                        'mime' => 'application/pdf',
                    ]);
        });
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
