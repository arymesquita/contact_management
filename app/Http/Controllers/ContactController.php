<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
#use DB;



class ContactController extends Controller
{
    
    public function index()
    {
        #$contacts = DB::table('contacts')->paginate(4);
        
        $contacts = Contact::paginate(20);

        return view ('admin.index')
                    ->with('contacts',$contacts);
    }


    public function create()
    {
        return view ('admin.create');
    }
    

    public function store(StoreRequest $request)
    {
        $contact = new Contact();

        $contact->name = $request->get('name');
        $contact->contact = $request->get('contact');
        $contact->email = $request->get('email');

        $user = auth()->user();
        $contact->user_id = $user->id;
        $contact->save();
        
        return redirect()
                    ->route('contact.index')
                    ->with('success','New contact created!');
    }

   
    public function show(Contact $contact)
    {
        return view ('admin.show',compact('contact'));
    }

    
    public function edit(Contact $contact, $id)
    {
        $contact = Contact::find($id);
        return view ('admin.edit')->with('contact',$contact);
    }

    
    public function update(UpdateRequest $request, Contact $contact, $id)
    {
        $contact = Contact::find($id);

        $contact->name = $request->get('name');
        $contact->contact = $request->get('contact');
        $contact->email = $request->get('email');

        $user = auth()->user();
        $contact->user_id = $user->id;
        $contact->save();

        return redirect()
        ->route('contact.index')
        ->with('success','Updated Contact!');
    }

   
    public function destroy(Contact $contact, $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect()->route('contact.index');
    }
}
