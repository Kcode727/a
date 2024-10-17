<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    // Display the add contact form
    public function create()
    {
        return view('addContact'); 
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts',
            'phone' => 'required|string|max:15',
        ]);
    
        // Save the contact (assuming you have a Contact model set up)
        Contact::create($request->all());
    
        // Redirect to the list of contacts
        return redirect()->route('list.contacts'); // Ensure this route exists
    }
    
    public function index()
    {
        $contacts = Contact::all(); 
        return view('listContacts', compact('contacts'));
    }
    public function destroy(Request $request)
    {
        return redirect()->route('list.contacts'); 
    }
}
