<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg section">
                @if ($errors->any())
                    <div style="color: red; margin-bottom: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="p-6 text-gray-900">
                    <h1 class="section-title">Bevezető szekció szerkesztése</h1>
                    <form action="{{ route('introduction.edit', $introduction->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="input-field-wrapper">
                            <label class="text" for="title">Cím</label>
                            <input class="input" type="text" name="title" id="title" value="{{ $introduction->title }}">
                        </div>
                        
                        <div class="input-field-wrapper">
                            <label class="text" for="subtitle">Alcím</label>
                            <input class="input" type="text" name="subtitle" id="subtitle" value="{{ $introduction->subtitle }}">
                        </div>

                        <div class="input-field-wrapper">
                            <label class="text" for="text">Tartalom</label>
                            <textarea class="input" name="text" id="text">{{ $introduction->content }}</textarea>
                        </div>

                        @if (session('success'))
                            <div class="success-edit">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        
                        <button class="btn" type="submit">Frissítés</button>
                    </form>
                </div>

                <div class="p-6 text-gray-900">
                    <h1 class="section-title">Ismerj meg szekció szerkesztése</h1>
                    <form action="{{ route('aboutme.edit', $aboutme->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="input-field-wrapper">
                            <label for="title" class="text">Cím</label>
                            <input type="text" name="title" id="title" value="{{ $aboutme->title }}">
                        </div>

                        <div class="input-field-wrapper">
                            <label for="content" class="text">Tartalom</label>
                            <textarea name="content" id="content">{{ $aboutme->content }}</textarea>
                        </div>

                        @if (session('success'))
                            <div class="success-edit">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        
                        <button class="btn" type="submit">Frissítés</button>
                    </form>
                </div>

                <div class="p-6 text-gray-900">
                    <h1 class="section-title">Tehcnológiák szekció szerkesztése</h1>
                    @foreach ($technologies as $technology)

                        <form action="{{ route('technology.edit', $technology->id) }}" method="post" class="technology-form">
                            @csrf
                            @method('PUT')

                            <div class="input-field-wrapper">
                                <label for="name" class="text">Technológia neve</label>
                                <input type="text" name="name" id="name" value="{{ $technology->name }}">
                            </div>

                            <button class="btn" type="submit">Frissítés</button>
                        </form>

                        <form action="{{ route('technology.delete', $technology->id) }}" method="post" class="technology-form">
                            @csrf
                            @method('DELETE')

                            <button class="btn" type="submit">Törlés</button>
                        </form>
                    @endforeach
                    @if (session('success'))
                        <div class="success-edit">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <h1 class="section-title" style="margin-top: 20px">Új technológia hozzáadása</h1>
                    <form action="{{ route('technology.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="input-field-wrapper">
                            <label for="name" class="text">Technológia neve</label>
                            <input type="text" name="name" id="name" required>
                            <input type="file" name="logo" id="logo" accept="image/*" required>
                        </div>
                        <button class="btn" type="submit">Feltöltés</button>
                    </form>
                </div>

                <div class="p-6 text-gray-900">
                    <h1 class="section-title">Projektek szekció szerkesztése</h1>
                    @foreach ($projects as $project)

                        <form action="" method="post" class="technology-form">
                            @csrf
                            @method('PUT')

                            <div class="input-field-wrapper">
                                <label for="name" class="text">Projekt neve</label>
                                <input type="text" name="name" id="name" value="{{ $project->name }}">
                            </div>

                            <div class="input-field-wrapper">
                                <label for="link" class="text">Link</label>
                                <input type="text" name="link" id="link" value="{{ $project->url }}">
                            </div>

                            <button class="btn" type="submit">Frissítés</button>
                        </form>

                        <form action="{{ route('project.delete', $project->id) }}" method="post" class="technology-form">
                            @csrf
                            @method('DELETE')

                            <button class="btn" type="submit">Törlés</button>
                        </form>
                    @endforeach
                    @if (session('success'))
                        <div class="success-edit">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <h1 class="section-title" style="margin-top: 20px">Új projekt hozzáadása</h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="input-field-wrapper">
                            <label for="name" class="text">Projekt neve</label>
                            <input type="text" name="name" id="name" required>

                            <label for="link" class="text">Link</label>
                            <input type="url" name="link" id="link" require>

                            <input type="file" name="project-logo" id="logo" accept="image/*" required>
                        </div>
                        <button class="btn" type="submit">Feltöltés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
