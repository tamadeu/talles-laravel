<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skills::all();
        return view('skills.index', compact('skills'));
    }

    public function create(){
        return view('skills.create');
    }

    public function store(Request $request)
    {
        Skills::create($request->all());
        return redirect()->route('skills')->with('success', 'Skill created successfully!');
    }

    public function destroy($id)
    {
        Skills::find($id)->delete();
        return redirect()->back()->with('success', 'Skill deleted successfully!');
    }
}
