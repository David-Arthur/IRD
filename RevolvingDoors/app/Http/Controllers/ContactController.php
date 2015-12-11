<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
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

    public function getContact()
    {
        return view('contact', array("page_title" => "Contact"));    
    }

    public function postContact(Request $request)
    {
        $data = array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            );
        
        if (sendContactEmail($data))
        {
            $parameters = ['page_title' => 'Contact', 'message' => 'Your message was successfully sent.'];
            return view('/contact', $parameters);
        }
        else
        {
            $parameters = ['page_title' => 'Contact', 'message' => 'Could not send your message'];
            return view('/contact', $parameters);
        }
    }

    private function sendContactEmail($data)
    {
        Mail::send('mail.contact', //Change this 
                               function ($m) use ($data) {
                                    $m->to('lavorel.lou@gmail.com'); //info@internationalrevolvingdoors.com
                                    $m->from($data['email'], $data['name']);
                                    $m->subject('Contact Message');
                               }
                    );
    }
}
