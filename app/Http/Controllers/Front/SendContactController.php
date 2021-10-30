<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactSend;
use App\Models\User;
use App\Notifications\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendContactController extends Controller
{
    public function sendContact(Request $request){

        $data = array(
            'saudacao'      =>  'Contato - Menina dos Olhos',
            'welcame'      =>  ' Subscrevi-me pelo site, com o seguinte teor:',
            'pupila'      =>  '',
            'message1'      =>  $request['message'],
            'message2'      =>  '',
            'footer1'   =>   '',
            'footer2' => 'Escrito por, '.$request['name'].' (E-mail: '.$request['email'].')!'
        );
        Mail::to('contato@ameninadosolhos.com.br')->send(new SendMail($data));

        return view('home')->with(['msg' => 'sucess']);

    }
}
