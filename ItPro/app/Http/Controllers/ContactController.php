<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\ContactRewuesyt;
use App\Models\Contact;
use GrahamCampbell\ResultType\Success;

class ContactController extends Controller
{

    // public function submit(Request $req){
    //     dd($req);
    // }

    public function submit(ContactRewuesyt $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Message has been added');
    }

    public function allData()
    {
        $contact = new Contact;
        // return view('messages', ['data' => $contact->orderBy('id','asc')->skip(1)->take(2)->get()]);
        // return view('messages', ['data' => $contact->where('subject','=', 'Hello')->get()]);

        return view('messages', ['data' => $contact->all()]);


        // $contact = new Contact;
        // dd($contact->all());
    }
    public function showOneMessage($id)
    {
        $contact = new Contact;
        return view('one-messages', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-messages', ['data' => $contact->find($id)]);

    }

    public function updateMessageSubmit($id, ContactRewuesyt $req)
    {
        $contact =Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one',$id)->with('success', 'Message has updated');
    }
    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Message deleted');

    }
}
