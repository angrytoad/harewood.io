<?php

namespace App\Http\Controllers;

use App\Mail\GetInTouchSubmission;
use App\Models\ContactFormSubmission;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GetInTouchController extends Controller
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {

    }

    public function show()
    {
        return view('get-in-touch');
    }

    public function post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:30',
            'g-recaptcha-response' => 'required',
        ]);

        $client = new Client();
        $res = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $request->get('g-recaptcha-response')
            ]
        ]);
        $json = json_decode($res->getBody()->getContents());
        if(!$json->success){
            return back()->withErrors([
                'We are having trouble verifying you are not a robot at the moment, are you sure you\'re not secretly working for the Sheriff of Nottingham?'
            ]);
        }

        $contactFormSubmission = new ContactFormSubmission();
        $contactFormSubmission->name = $request->get('name');
        $contactFormSubmission->email = $request->get('email');
        $contactFormSubmission->message = $request->get('message');
        $contactFormSubmission->save();

        Mail::to(env('ADMIN_EMAIL'))->send(new GetInTouchSubmission($request->all()));

        return back()->with([
            'alert-success' => 'Thanks for getting in touch with us, we\'ll aim to get back to you within 2 working business days.'
        ]);
    }
}
