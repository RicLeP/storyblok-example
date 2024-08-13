<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Riclep\StoryblokForms\FormResponse;

class FormController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $formResponse = new FormResponse($request);

        $formResponse->validate();

        Mail::to('vicky@gsdsolutions.gg')
            ->send(
                new ContactForm($request->except(['_token', '_slug']))
            );

        return redirect()->back()->with('status', 'sent');
    }
}
