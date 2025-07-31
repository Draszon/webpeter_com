@extends('layouts.public')

@section('title', 'Peter')

@section('content')
<section class="introduction" id="introduction">
    <div class="introduction-wrapper section-wrapper">
        <div class="me">
            <div class="introduction-text-wrapper">
                <h1 class="introduction-title">{{ $introduction->title }}</h1>
                <h2 class="titulus">{{ $introduction->subtitle }}</h2>
                <p class="introduction-text">{{ $introduction->content }}</p>
            </div>
        </div>
        <div class="introduction-logo">
            <img src="{{ asset('images/desk_sit.svg') }}" alt="fejléc logó">
        </div>
    </div>
</section>

<section class="about-me" id="about-me">
    <div class="aboutme-wrapper section-wrapper">
        <div class="me-img">
            <img src="{{ asset('images/coding.svg') }}" alt="fejlesztés közben">
        </div>

        <div class="aboutme-text">
            <h2>{{ $aboutme->title }}</h2>
            <p>{{ $aboutme->content }}</p>
        </div>
    </div>
</section>

<section class="technologies" id="technology">
    <div class="technology-wrapper section-wrapper">
        <h2 class="technology-title">Technológiák amiket használok</h2>
        <img class="tech-logo" src="{{ asset('images/bugfix.svg') }}" alt="technológiák">
        <div class="technology-card-wrapper">
            @foreach ($technologies as $tech)
                <div class="technology-card">
                    <img class="technology-logo" src="{{ asset('images/'. $tech->logo) }}" alt="{{ $tech->name }} logo">
                    <p class="technology-name">{{ $tech->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="projects" id="projects">
    <div class="section-wrapper projects-wrapper">
        <h2 class="projects-title">Korábbi munkáim</h2>
        <div class="my-projects">
            @foreach ($projects as $project)
                <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer">
                    <div class="kucko-project project">
                        <img src="{{ asset('images/' . $project->logo) }}" alt="{{ $project->name }}">
                        <h3>{{ $project->name }}</h3>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="contacts" id="contact">
    <div class="section-wrapper contacts-wrapper">
        <h2 class="contacts-title">Lépj kapcsolatba velem</h2>
        <div class="contact">
            @foreach ($contacts as $contact)
                <div>
                    <a href="{{ $contact->url }}" target="_blank" rel="noopener noreferrer">
                        <img class="contact-logo" src="{{ asset('images/' . $contact->logo) }}" alt="{{ $contact->name }}">
                        <p>{{ $contact->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
