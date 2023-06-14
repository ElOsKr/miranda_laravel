<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactCreate(Request $request): RedirectResponse {
        $contact = new Contact();

        $contact->contact_name = $request->input('username');
        $contact->contact_email = $request->input('useremail');
        $contact->contact_phone = $request->input('usertel');
        $contact->contact_subject = $request->input('usersubject');
        $contact->contact_comment = $request->input('usermessage');
        $contact->contact_status = 0;

        $contact->save();

        return back()->with('success', 'Comment sent successfully');
    }
}
