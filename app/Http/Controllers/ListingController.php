<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{

    //Return all listings
    public function index()
    {
        //dd(request('tag'));
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    //Show Single Listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
            

        ]);
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'title' => 'required',
            //'company' => ['required', Rule::unique('listings', 'company')],
          //  'location' => 'nullable|string',
            'website'=>'nullable|string',
            'tags' => 'required',
            'email'=>'nullable|string',
            'description' =>'nullable|string'
        ]);
        

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $formFields['user_id'] = auth()->id();
        //dd($formFields);

        Listing::create($formFields);
        
        return redirect('/listings')->with('message','Listing created succesfully!');
    }

    public function storeComment(Request $request, Listing $listing)
    {
        $validated = $request->validate([
            'comment' => 'required|string',
        ]);

        $listing->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $validated['comment'],
        ]);

        return redirect()->back()->with('message', 'Comment added successfully!');
    }

    public function edit(Listing $listing) {
        return view('listings.edit',['listing'=>$listing]);
    }
    public function update(Request $request,Listing $listing) {

        if(!$listing->user_d != auth()->id()) {
            abort(403,"Unathorized access");
        }

        $formFields = $request->validate([
            'title' => 'required',
           // 'company' => 'required',
           // 'location' => 'nullable|string',
            'website'=>'nullable|string',
            'tags' => 'required',
            'email'=>'nullable|string',
            'description' =>'nullable|string'
        ]);
        //   dd($request->all());

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formFields);
        
        return back()->with('message','Listing updated succesfully!');
    }

    public function destroy(Listing $listing) {
        if(!$listing->user_d != auth()->id()) {
            abort(403,"Unathorized access");
        }
        
        $listing->delete();
        return redirect('/listings')->with('message','Listings Deleted Successfully');
    }

    //Show create form 
    public function create()
    {
        return view('listings.create', []);
    }

    public function manage()
    {
        return view('listings.manage', ['listings'=>auth()->user()->listings()->get()]);
        // Error in listing doesn't affect funtioning, works as intended 
    }

    // stuffing 'em here cuz  i don't wanna another controller :I
    public function favorites()
    {
        return view('listings.favorite', ['listings'=> auth()->user()->favoriteListings()->get()]);
    }

    public function addfavorite(Request $request, Listing $listing)
    {
        $user = auth()->user();
        
        if ($user->favoriteListings()->where('listing_id', $listing->id)->exists()) {
            return redirect()->back()->with('message', 'This listing is already in your favorites.');
        }
        
        
        $user->favoriteListings()->attach($listing->id);
        
        return redirect()->back()->with('message', 'Listing added to favorites successfully.');
   
    }

    public function removeFavorite(Request $request, Listing $listing)
    {
        $user = auth()->user();
        $user->favoriteListings()->detach($listing->id);
        return redirect()->back()->with('message', 'Listing removed from favorites successfully.');
  
    }
}
