<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    /**
     * @var Contact
     */
    private $contact;
    
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $dataForm = $request->all();
        if ($this->contact->create($dataForm)) {
            $guest = new \stdClass();
            $guest->name = $request->name;
            $guest->email = $request->email;
            
            //Mail::send(new ContactSite($guest));
            return response()->json(['message' => 'Recebemos seu contato em breve retornaremos.']);
        }
        abort(500, 'Houve um erro no servidor, tente mais tarde.');
    }
    
}
