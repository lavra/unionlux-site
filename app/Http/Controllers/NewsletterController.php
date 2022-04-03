<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    
    /**
     * @var Newsletter
     */
    private $newsletter;
    
    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $email =  $request->except('_token');
       $exist = $this->newsletter->whereEmail($email)->first();
       if($exist) {
           return response()->json(['message' => 'Email já cadastrado!']);
       }
       if ($this->newsletter->create($email)) {
           return response()->json(['message' => 'Obrigado por se inscrever em nossa Newsletter']);
       }
        abort(500, 'Houve um erro no servidor, tente mais tarde.');
       
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
