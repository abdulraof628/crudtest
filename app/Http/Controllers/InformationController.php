<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\information;

class InformationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('information');
    }

    public function create()
    {
        return view('information.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'country'=>'required'
        ]);

        $information = new Information([
            'name' => $request->get('name'),
            'age' => $request->get('age'),
            'country' => $request->get('country')
        ]);
        $information->save();
        return redirect('/home')->with('success', 'Information saved!');
    }

    public function edit($id)
    {
        $information = Information::find($id);
        return view('edit_information', compact('information'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'country'=>'required'
        ]);

        $information = Information::find($id);
        $information->name =  $request->get('name');
        $information->age = $request->get('age');
        $information->country = $request->get('country');
        $information->save();

        return redirect('/home')->with('success', 'information updated!');
    }
    public function destroy($id)
    {
        //
        $information = Information::find($id);
        $information->delete();

        return redirect('/home')->with('success', 'Information deleted!');
    }

}
