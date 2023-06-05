<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('index')->with('contacts', $contacts);
    }

    public function add()
    {
        return view('add');
    }

    public function insert(Request $request)
    {
        $input = $request->all();
        Contact::create($input);

        return redirect('/');
    }

        public function edit(string $id)
        {
            $contact = Contact::find($id);

            return view('edit')->with('contact', $contact);
            // return view('edit', ['contact' => $contact]);
        }

    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);

        return redirect('/');
    }

    public function delete(string $id)
    {
        Contact::destroy($id);

        return redirect('/');
    }
}
