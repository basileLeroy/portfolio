<?php

namespace App\Http\Controllers;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\ConfirmContactMail;
use App\Mail\NotifyNewContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index (Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
            'bottingtrap' => 'max:0',
            'g-recaptcha-response' => ['required', 'string', 
                function (string $attribute, mixed $value, Closure $fail) {
                    $google_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => config('services.recaptcha.secret_key'),
                        'response' => $value,
                        'remoteIp' => \request()->ip()
                    ]);

                    if (!$google_response->json('success')) {
                        $fail("Your request has been denied");
                    }
                }
            ]
        ]);

        $now = Carbon::now();
        $timestamp = $now->format('M jS, Y');

        if ($request->bottingtrap !== null) {
            return redirect()->back()->with(['bot-alert' =>'Your request has been denied!']);
        }

        Mail::to(['basileleroy.pro@gmail.com', 'basile2105@gmail.com'])->send(new NotifyNewContactMail([
            "name" => $request->name,
            "email" => $request->email,
            "message" => $request->message,
            "timestamp" => $timestamp
        ]));

        Mail::to($request->email)->send(new ConfirmContactMail([
            "name" => $request->name,
            "message" => $request->message,
            "timestamp" => $timestamp
        ]));

        return redirect()->back();

    }
}
