<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class Rorm {

    private Mailer $mailer;


    public function __construct(Mailer $mailer){
    
        $this->mailer = $mailer;
    }
    public function __invoke(Request $request){
        dd($request->all());
    

    }
}