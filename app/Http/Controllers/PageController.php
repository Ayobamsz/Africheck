<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function __construct()  
    {

    }
     
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function resources()
    {
        return view('resources');
    }
    public function blog()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'h-captcha-response' => 'required|string',
        ]);

        $verification = Http::asForm()->post('https://hcaptcha.com/siteverify', [
            'secret' => config('services.hcaptcha.secret'),
            'response' => $request->input('h-captcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$verification->ok() || !data_get($verification->json(), 'success')) {
            return back()
                ->withInput()
                ->withErrors(['captcha' => 'Please complete the hCaptcha challenge correctly.']);
        }

        $contact = Contact::create($request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'subject',
            'message',
        ]));

        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('itdesk@africheck.com.ng')
                    ->subject('New Contact Form Submission: ' . $request->subject)
                    ->from($request->email, $request->first_name . ' ' . $request->last_name);
        });

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
