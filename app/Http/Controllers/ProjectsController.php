<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Projects::create($request->all());
        return redirect()->route('projects')->with('success', 'Project created successfully!');
    }

    public function edit($id)
    {
        $projects = Projects::findOrFail($id);
        $existingImage = $projects->image;
        return view('projects.edit', compact('projects', 'existingImage'));
    }

    public function update(Request $request, $id)
    {
        $project = Projects::findOrFail($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->live_link = $request->input('live_link');
        $project->code_link = $request->input('code_link');
        //$project->image = $request->input('image');
        if ($request->has('image')) {
            Storage::delete($project->image); // Delete old image
            $imagePath = $request->file('image')->store('public/images');
            $project->image = Storage::url($imagePath);
        } elseif ($request->has('existing_image')) { // Update with existing image
            $project->image = $request->input('existing_image');
        }
        $project->save();
        
        return redirect()->route('projects')->with('success', 'Project updated successfully');
    }

    public function destroy($id)
    {
        Projects::find($id)->delete();
        return redirect()->back()->with('success', 'Project deleted successfully!');
    }
}
