<?php

namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);
        ContactFormSubmission::query()->create($data);
        return redirect()->to(url('/#contact_us_section'))->with( ['success_message' => 'we reserved your message our team will contact with you soon'] );
    }
}
