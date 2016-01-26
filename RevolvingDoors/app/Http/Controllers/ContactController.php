<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'textmessage' => 'required',
        ]);
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
            'textmessage' => $request->get('textmessage'),
            );
        
        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
            $messages = $validator->messages();
            return redirect('contact')
                ->withErrors($validator);
        }
        else
        {                  
            if (1)//$this->sendContactEmail($data))
            {
                $parameters = ['page_title' => 'Contact', 'textmessage' => 'Your message was successfully sent.', 'class' => 'alert-success'];
                return view('contact', $parameters);
            }
            else
            {
                $parameters = ['page_title' => 'Contact', 'textmessage' => 'Could not send your message', 'class' => 'alert-danger'];
                return view('contact', $parameters);
            }
        }
    }

    private function sendContactEmail($data)
    {
        Mail::send('mail.messagefromuser', //Change this 
            ['name' => $data['name'], 'textmessage' => $data['textmessage']],
            function ($m) use ($data) {
                $m->to('lavorel.lou@gmail.com'); //info@internationalrevolvingdoors.com
                $m->from($data['email'], $data['name']);
                $m->subject('User Message');
            }
        );
    }
}
