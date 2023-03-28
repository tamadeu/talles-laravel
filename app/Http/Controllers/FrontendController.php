<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;

class FrontendController extends Controller
{
    public function index()
    {
        // Retrieve the frontend record
        $frontend = Frontend::first();

        // Pass the frontend data to the view
        return view('frontend', ['frontend' => $frontend]);
    }

    public function update(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'hero_header_text' => 'required|string|max:255',
            'hero_body_text' => 'required|string',
            'about_header_text' => 'required|string|max:255',
            'about_body_text' => 'required|string',
            'myStory_header_text' => 'required|string|max:255',
            'myStory_body_text' => 'required|string',
            'projects_header_text' => 'required|string|max:255',
            'projects_body_text' => 'required|string',
            'contact_header_text' => 'required|string|max:255',
            'contact_body_text' => 'required|string',
        ]);

        // Retrieve the frontend record
        $frontend = Frontend::first();

        // Update the frontend record with the new values
        $frontend->hero_header_text = $request->input('hero_header_text');
        $frontend->hero_body_text = $request->input('hero_body_text');
        $frontend->about_header_text = $request->input('about_header_text');
        $frontend->about_body_text = $request->input('about_body_text');
        $frontend->myStory_header_text = $request->input('myStory_header_text');
        $frontend->myStory_body_text = $request->input('myStory_body_text');
        $frontend->projects_header_text = $request->input('projects_header_text');
        $frontend->projects_body_text = $request->input('projects_body_text');
        $frontend->contact_header_text = $request->input('contact_header_text');
        $frontend->contact_body_text = $request->input('contact_body_text');

        // Save the changes to the database
        $frontend->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Frontend updated successfully!');
    }

}
