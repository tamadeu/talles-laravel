<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Techs;

class TechsController extends Controller
{
    public function index()
    {
        $techs = Techs::all();
        return view('techs.index', compact('techs'));
    }

    public function create(){
        return view('techs.create');
    }

    public function store(Request $request)
    {
        Techs::create($request->all());
        return redirect()->route('techs')->with('success', 'Skill created successfully!');
    }

    public function destroy($id)
    {
        Techs::find($id)->delete();
        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }
}
