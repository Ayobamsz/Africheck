<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Helpers\SecurityQuestions;

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
        $questionData = SecurityQuestions::getRandomQuestion();
        session(['security_question_index' => $questionData['index']]);
        return view('contact', ['question' => $questionData['question']]);
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
            'security_answer' => 'required|string',
        ]);

        // Verify the security question answer
        $questionIndex = session('security_question_index');
        $userAnswer = $request->input('security_answer');

        if (!SecurityQuestions::verifyAnswer($questionIndex, $userAnswer)) {
            return back()
                ->withInput()
                ->withErrors(['security_answer' => 'Your answer to the security question is incorrect. Please try again.']);
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

        // Clear the session question
        session()->forget('security_question_index');

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
