<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Experience;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        $contacts = Contact::all();
        $projects = Project::all();
        $skills = Skill::all();
        $experiences = Experience::all();

        return view('home', compact('profile', 'contacts', 'projects', 'skills', 'experiences'));
    }

    public function profiles()
    {
        $profile = Profile::first();
        return view('home', compact('profile'));
    }

    public function skills()
    {
        $skills = Skill::all();
        return view('skills', compact('skills'));
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    public function projects()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function experiences()
    {
        $experiences = Experience::all();
        return view('experience', compact('experiences'));
    }
}
