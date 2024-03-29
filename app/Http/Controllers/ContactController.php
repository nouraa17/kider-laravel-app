<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;



class ContactController extends Controller
{
    private $columns = [
        'name',
        'email',
        'subject',
        'message'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $contacts = Contact::get();
        $contacts = Contact::paginate(3);
        $unreadCount = Contact::where('is_viewed', false)->count();

        return view('admin.contactUs.listContactUs', compact('contacts','unreadCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        // $formData = [
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'subject' => $request->input('subject'),
        //     'message' => $request->input('message'),
        // ];
        $formData = $request->only($this->columns);
        Contact::create($formData);
        $mail = new ContactUsEmail($formData);
        Mail::to('info@example.com')->send($mail);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        if ($contact) {
            $contact->is_viewed = true;
            $contact->save();
        }
        return view('admin.contactUs.viewContactUs', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::where('id', $id)->delete();
        return redirect('contactUsList');
    }

    ////////////////////////////////////////////////////////////////////////////////
    public function unread()
    {
        $contacts = Contact::where('is_viewed', false)->get();
        $allCount = Contact::count();
        return view('admin.contactUs.unread', compact('contacts','allCount'));
    }
    
    // public function navbar()
    // {
    //     $unreadCount = Contact::where('is_viewed', false)->count();
    //     return view('admin.includes.nav', compact('unreadCount'));
    // }

}
