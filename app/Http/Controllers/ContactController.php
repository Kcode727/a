<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function create()
    {
        return view('addContact'); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts',
            'phone' => 'required|string|max:15',
        ]);

        Contact::create($request->all());

        return redirect()->route('list.contacts')->with('success', 'Contact added successfully.');
    }
    
    public function index()
    {
        $contacts = Contact::all(); 
        return view('listContacts', compact('contacts'));
    }
    public function showDeleteContacts(Request $request)
    {
        // Logic for fetching contacts for deletion
        $query = Contact::query();
        $noResults = false; // Flag for no results
    
        // Search functionality
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('email', 'like', '%' . $request->search . '%')
                  ->orWhere('phone', 'like', '%' . $request->search . '%');
            
            $contacts = $query->get();
    
            // Set flag if no results found
            if ($contacts->isEmpty()) {
                $noResults = true;
            }
        } else {
            $contacts = $query->get(); // Get all contacts if no search
        }
    
        return view('deleteContacts', compact('contacts', 'noResults'));
    }
    

public function deleteMultipleContacts(Request $request)
{
    // Validate that at least one contact is selected
    $request->validate(['contacts' => 'required|array']);

    // Delete selected contacts
    Contact::destroy($request->contacts);

    return redirect()->route('show.delete.contacts')->with('success', 'Selected contacts deleted successfully.');
}


}
