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
        ], [
            '*.required' => 'Helytelen érték!'
        ]);

        $image = $request->file('logo');
        $imageName = $image->getClientOriginalName();
        //$destinationPath = public_path('images');
        $destinationPath = env('PUBLIC_PATH', public_path('images'));

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

    public function editProject(Request $request, $id) {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url',
        ]);

        $project = Project::findOrFail($id);
        $project->name = $request->input('name');
        $project->url = $request->input('link');
        $project->save();

        return redirect()
            ->route('dashboard')
            ->with('success', 'Sikeres adatmódosítás!');
    }

    public function storeProject(Request $request) {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'projectlogo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $request->file('projectlogo');
        $imageName = $image->getClientOriginalName();
        //$destinationPath = public_path('images');
        $destinationPath = env('PUBLIC_PATH', public_path('images'));

        $image->move($destinationPath, $imageName);

        $project = new Project();
        $project->name = $validate['name'];
        $project->url = $validate['link'];
        $project->logo = $imageName;
        $project->save();

        return back()->with('success', 'Sikeres feltöltés!');
    }

    public function editContact (Request $request, $id) {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url'
        ]);

        $contact = Contact::findOrFail($id);
        $contact->name = $request->input('name');
        $contact->url = $request->input('link');
        $contact->save();

        return back()->with('success', 'Sikeres adatmódosítás');
    }

    public function deleteContact($id) {
        $contact = Contact::findOrFail($id);

        $imagePath = public_path('images/' . $contact->logo);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $contact->delete();

        return back()->with('success', 'Sikeres törlés!');
    }        

     public function storeContact(Request $request) {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|url',
            'contactlogo' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $request->file('contactlogo');
        $imageName = $image->getClientOriginalName();
        //$destinationPath = public_path('images');
        $destinationPath = env('PUBLIC_PATH', public_path('images'));

        $image->move($destinationPath, $imageName);

        $contact = new Contact();
        $contact->name = $validate['name'];
        $contact->url = $validate['link'];
        $contact->logo = $imageName;
        $contact->save();

        return back()->with('success', 'Sikeres feltöltés!');
    }
}
