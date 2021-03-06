<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *exit
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Listing $listing)
    {
        //
       // dd($request);
       $validatedata = request()->validate([ 
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'bio' => 'required',
            
        ]);
            $listing = new Listing();
            $listing->user_id = Auth::id();
            $listing->name  = $request->input('name');
            $listing->address  = $request->input('address');
            $listing->website  = $request->input('website');
            $listing->email  = $request->input('email');
            $listing->phone  = $request->input('phone');
            $listing->bio  = $request->input('bio');
            $listing->save();

            return redirect('/home')->with('status', 'Listing created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $listing = Listing::find($id);
        return view('edit')->with('listing', $listing);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedata = request()->validate([ 
            'name' => 'required',
            'address' => 'required',
            'website' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer',
            'bio' => 'required',
            
        ]);
            $Listing =  Listing::find($id);
           // $Listing->user_id = Auth::id();
            $Listing->name  = $request->input('name');
            $Listing->address  = $request->input('address');
            $Listing->website  = $request->input('website');
            $Listing->email  = $request->input('email');
            $Listing->phone  = $request->input('phone');
            $Listing->bio  = $request->input('bio');
            $Listing->save();

            return redirect('/home')->with('status', 'Listing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
