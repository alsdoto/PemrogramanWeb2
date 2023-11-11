<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomMail;

class EmailController extends Controller
{
    public function showForm()
    {
        return view('send-email');
    }

    public function sendEmail(Request $request)
    {
        $subject = $request->input('subject');
        $message = $request->input('message');
        $recipient = $request->input('recipient');

        // Panggil mailable class untuk mengirim email
        Mail::to($recipient)->send(new CustomMail($subject, $message));

        return redirect('/send-email')->with('success', 'Email sent successfully!');
    }
}
