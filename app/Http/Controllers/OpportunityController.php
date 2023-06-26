<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OpportunityController extends Controller
{
    //get and show all opportunities
    public function index(){

        return view('opportunities.index', [
            'opportunities' => Opportunity::latest()->filter(request(['tag', 'search']))->paginate(3)
                
         ]);
    }

    //Show reviews page
    public function reviews() {
        return view('opportunities.reviews');
    }

    //Show about page
    public function about() {
        return view('opportunities.about');
    }

    //show single opportunity
    public function show(Opportunity $opportunity){
        return view('opportunities.show', [
            'opportunity' => $opportunity
        ]);
       
    }

    //Show create form
    public function create() {
      
        // $data = stages::all();

        return view('opportunities.create');
    }

    //Store opportunity data
    public function store(Request $request) {
        // validate
        $formFields = $request->validate([
            'title' => 'required',
            'company' =>'required',
            'location'=>'required',
            'website' => 'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'deadline'=>'required',
            'amount' =>'required',
            'posted' =>'required',
            'description'=>'required',
            'qualifications'=>'required',
            'dropdown'=>'required'
        ]);

        //add userid to the db
        $formFields['user_id'] = auth()->id();

        //to create in database
        Opportunity::create($formFields);


        return redirect('/')->with('success','Opportunity created successfully!');
    }

    //show edit form
    public function edit(Opportunity $opportunity) {
        return view('opportunities.edit', ['opportunity' => $opportunity]);
    }

    //update edit form
    public function update(Request $request, Opportunity $opportunity) {
        //make sure logged in user is owner
        if($opportunity->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }

        // validate
        $formFields = $request->validate([
            'title' => 'required',
            'company' =>'required',
            'location'=>'required',
            'website' => 'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'deadline'=>'required',
            'posted'=>'required',
            'amount' =>'required',
            'description'=>'required',
            'qualifications'=>'required'
        ]);

        //to create in database
        $opportunity->update($formFields);


        return back()->with('success','Opportunity updated successfully!');
    }

    //Delete opportunity
    public function destroy(Opportunity $opportunity) {
         //make sure logged in user is owner
         if($opportunity->user_id != auth()->id()){
            abort(403, 'Unauthorized Action');
        }
        $opportunity->delete();
        return redirect('/')->with('success', 'Opportunity deleted successfully');
    }

    //manage opportunities
    public function manage() {
        return view('opportunities.manage', ['opportunities'=>auth()->user()->opportunities()->get()]);
    }
}
