<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use Mail;


class ContactController extends Controller
{
    public function order()
  {
      return view('pages.order');
   }
    public function store(PagesRequest $request)
    {
//

        Mail::to('ewelina.brzozowiec@wp.pl')->send(new SendEmail($request));
        return redirect()->back()->with('message','Twoja wiadomość została wysłana');

    }

}
