<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg section">
                <div class="p-6 text-gray-900">
                    <h1 class="section-title">Bevezető szöveg</h1>
                    <form action="" method="post">
                        @csrf
                        @method('PUT')

                        <div class="input-field-wrapper">
                            <label class="title" for="title">Cím</label>
                            <input class="input" type="text" name="title" id="title">
                        </div>
                        
                        <div class="input-field-wrapper">
                            <label class="subtitle" for="subtitle">Alcím</label>
                            <input class="input" type="text" name="subtitle" id="subtitle">
                        </div>

                        <div class="input-field-wrapper">
                            <label class="text" for="text">Szöveg</label>
                            <textarea class="text-input" name="text" id="text"></textarea>
                        </div>
                        <button class="btn" type="submit">Frissítés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
