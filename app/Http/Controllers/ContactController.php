<?php

namespace App\Http\Controllers;

use Closure;
use Illuminate\Http\Request;
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

        if ($request->bottingtrap !== null) {
            dd('a bot filled it in');
        }

        Mail::raw('This is a test email', function ($message) {
            $message->to('basileleroy.pro@gmail.com')
                    ->subject('Test Email from Laravel');
        });
        dd($request);

    }
}
