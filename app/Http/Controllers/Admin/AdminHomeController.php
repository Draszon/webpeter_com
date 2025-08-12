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

    public function deleteTechnology($id) {
        $technology = Technologie::findOrFail($id);

        $imagePath = public_path('images/' . $technology->logo);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $technology->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres törlés!');
    }

    public function editTechnology(Request $request, $id) {
        $request->validate([
            'name' => 'required'
        ], [
            '*.required' => 'Minden mezőt ki kell tölteni!'
        ]);

        $technology = Technologie::findOrFail($id);
        $technology->name = $request->input('name');
        $technology->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres adatmódosítás!');
    }

    public function storeTechnology(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $image = $request->file('logo');
        $imageName = $image->getClientOriginalName();
        $destinationPath = public_path('images');

        $image->move($destinationPath, $imageName);

        $technology = new Technologie();
        $technology->name = $validated['name'];
        $technology->logo = $imageName;
        $technology->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres feltöltés!');
    }

    public function deleteProject($id) {
        $project = Project::findOrFail($id);

        $imagePath = public_path('images/' . $project->logo);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $project->delete();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres törlés!');
    }
}
