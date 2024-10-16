<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Display the add contact form
    public function create()
    {
        return view('addContact'); 
    }
    public function store(Request $request)
    {
        return redirect()->route('list.contacts'); 
    }
    public function index()
    {
        return view('listContacts', compact('contacts')); 
    }
    public function destroy(Request $request)
    {
        return redirect()->route('list.contacts'); 
    }
}
