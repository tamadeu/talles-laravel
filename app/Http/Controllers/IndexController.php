<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Frontend;
use App\Models\Skills;
use App\Models\Techs;
use App\Models\Projects;

class IndexController extends Controller
{
    public function index(){
        // Retrieve user by ID
        $user = User::find(1);
        $frontend = Frontend::first();
        $skills = Skills::all();
        $techs = Techs::all();
        $projects = Projects::all();

        if($user) {
            // Return the user's name
            return view('index', [
                'user' => $user,
                'frontend' => $frontend,
                'skills' => $skills,
                'techs' => $techs,
                'projects' => $projects

            ]);
        } else {
            // Handle user not found error
            return 'User not found';
        }
    }

    public function new(){
        // Retrieve user by ID
        $user = User::find(1);
        $frontend = Frontend::first();
        $skills = Skills::all();
        $techs = Techs::all();
        $projects = Projects::all();

        if($user) {
            // Return the user's name
            return view('new', [
                'name' => $user->name,
                'job_name' => $user->job_name,
                'frontend' => $frontend,
                'skills' => $skills,
                'techs' => $techs,
                'projects' => $projects

            ]);
        } else {
            // Handle user not found error
            return 'User not found';
        }
    }
}
