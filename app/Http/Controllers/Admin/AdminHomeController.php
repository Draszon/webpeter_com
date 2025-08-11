<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use App\Models\Contact;
use App\Models\Introduction;
use App\Models\Project;
use App\Models\Technologie;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class AdminHomeController extends Controller
{
    public function index() {
        $introduction = Introduction::first();
        $aboutme = Aboutme::first();
        $technologies = Technologie::all();
        $projects = Project::all();
        $contacts = Contact::all();

        return view('admin.dashboard', compact('introduction', 'aboutme', 'technologies', 'projects', 'contacts'));
    }

    public function editIntroduction(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'text' => 'required'
        ], [
            '*.required' => 'Minden mezőt ki kell tölteni!'
        ]);

        $introduction = Introduction::findOrFail($id);
        $introduction->title = $request->input('title');
        $introduction->subtitle = $request->input('subtitle');
        $introduction->content = $request->input('text');
        $introduction->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres adatmódosítás!');
    }

    public function editAboutme(Request $request, $id) {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ], [
            '*.required' => 'Minden mezőt ki kell tölteni!'
        ]);

        $aboutme = Aboutme::findOrFail($id);
        $aboutme->title = $request->input('title');
        $aboutme->content = $request->input('content');
        $aboutme->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres adatmódosítás!');
    }
}
