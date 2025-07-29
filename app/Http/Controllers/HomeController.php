<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use App\Models\Contact;
use App\Models\Introduction;
use App\Models\Project;
use App\Models\Technologie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $introduction = Introduction::first();
        $aboutme = Aboutme::first();
        $technologies = Technologie::all();
        $projects = Project::all();
        $contacts = Contact::all();

        return view('public.home', compact('introduction', 'aboutme', 'technologies', 'projects', 'contacts'));
    }
}
