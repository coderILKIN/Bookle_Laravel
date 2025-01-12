<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(StoreContactRequest $request){

        $validated = $request->validated();


        $created = Contact::create($validated);

        if(!$created){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        return redirect()->back()->with('success', 'You message has been sent');
        
    }
}
