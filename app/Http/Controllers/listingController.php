<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// use Illuminate\Foundation\Http\FormRequest;

class listingController extends Controller
{
    //show all listings
    public function index(){
        return view('listings.index',[
            'listings' => Listing::latest() -> 
            filter(request(['tag','search'])) -> simplePaginate(2)
        ]);
    }

    //show single lising
    public function show(Listing $listing){
        return view('listings.show',[
            'listing' => $listing   
        ]);
    }

    //create a new listing
    public function create(){
        return view('listings.create');
    }

    //store the new created from
    public function store(Request $request)
    {
        // Validate the request data
        $formFields = $request->validate([
            'title' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        
         // Set 'user_id' to the currently authenticated user's ID
         $formFields['user_id'] = auth()->id();
    
    
        // If logo is present in the request, store it
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
    
       
        // Create the listing
        Listing::create($formFields);
    
        // Redirect back to the home page or wherever you want
        return redirect('/');
    }
    
        //edit form
    public function edit(Listing $listing){
        //    dd($listing->title);
                return view('listings.edit',['listing' => $listing]);
     }

     //update and store the  created from
    public function update(Request $request , Listing $listing){
        //logged in is the authorized owner
        if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }
        // dd($request->file('logo'));
    $formFields = $request->validate([
        'title' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'company' => ['required'],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required','email'],
        'tags' => 'required',
        'description' => 'required'
    ]);

  

    if ($request->hasFile('logo')) {
        $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }
    // dd('Validation passed', $formFields);
    $listing->update($formFields);

    // dd('Store method executed');
    return redirect('/');
}


     public function destroy(Listing $listing){
         //logged in is the authorized owner
         if($listing->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }
        $listing->delete();
        return redirect('/');
     }

     //show listings of owner
    public function manager(){
        return view('listings.manager',[
            'listings' => auth()->user()->listings()->get()   
        ]);
    }

  
}
