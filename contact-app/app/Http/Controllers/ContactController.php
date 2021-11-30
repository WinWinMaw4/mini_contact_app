<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function index(){
        $contact = Contact::all();
        return $contact;
    }

    public function create(){
        return view('contact.create');
    }

    public function store(Request $request){
//        return $request;
//        model ကို obj ပြောင်းတာ
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->save();
            return redirect()->route('create')->with('status','new contact created');
    }

    public function show($id){
        $contact = Contact::find($id);
        return $contact;
    }

    public function edit($id){
        $contact = Contact::find($id);
        return view('contact.edit',compact('contact'));
    }

    public function update($id,Request $request){
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->update();
        return redirect()->route('create')->with('status','contact Update');
    }


    public function destory($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('create')->with('status','Contact Deleted');

    }

}
