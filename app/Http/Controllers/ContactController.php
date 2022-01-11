<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public $timestamps = false;
    protected $fillable = ['id', 'first_name', 'last_name'];

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->type = $request->type;
        $contact->save();
        return redirect('contact')->with('status', 'Thank You for Contactin With Us');
    }
}
