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
                    <h1 class="section-title">Ismerj meg szekció</h1>
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
            </div>
        </div>
    </div>
</x-app-layout>
