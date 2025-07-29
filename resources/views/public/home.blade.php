@extends('layouts.app')

@section('title', 'Peter')

@section('content')
<section class="introduction" id="introduction">
    <div class="introduction-wrapper section-wrapper">
        <div class="me">
            <div class="introduction-text-wrapper">
                <h1 class="introduction-title">Üdvözöllek, Péter vagyok!</h1>
                <h2 class="titulus">Rendszerüzemeltető • Hobbi webfejlesztő</h2>
                <p class="introduction-text">
                    Webfejlesztés? Nálam ez hobbi, szenvedély és felfedezés egyben.
                    Szabadidőmben kódsorokat írok és ötleteket valósítok meg.
                    Nézz körül ha kíváncsi vagy min dolgozom éppen.
                </p>
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
            <h2>Ismerj meg</h2>
            <p>
                Főállásban rendszerüzemeltetéssel foglalkozom, ahol Linux-alapú
                rendszerek stabil, biztonságos működéséért felelek. Ez a háttér
                fontos alapot ad a technikai szemléletemhez, de ami igazán
                lelkesít, az a webfejlesztés. <br>
                A kódolás számomra nemcsak eszköz,
                hanem kreatív eszköz – szeretek ötleteket megvalósítani,
                funkciókat tervezni és működő webalkalmazásokat építeni.
                A fejlesztés világa számomra egy izgalmas
                terep, ahol mindig van mit tanulni és fejleszteni. Ez az oldal
                is ennek a szenvedélyemnek a része: gyakorlás, tanulás és
                önkifejezés egyben.
            </p>
        </div>
    </div>
</section>

<section class="technologies" id="technology">
    <div class="technology-wrapper section-wrapper">
        <h2 class="technology-title">Technológiák amiket használok</h2>
        <img class="tech-logo" src="{{ asset('images/bugfix.svg') }}" alt="technológiák">
        <div class="technology-card-wrapper">
            <div class="technology-card">
                <img class="technology-logo" src="{{ asset('images/html-5.png') }}" alt="html5 logo">
                <p class="technology-name">HTML</p>
            </div>
            <div class="technology-card">
                <img class="technology-logo" src="{{ asset('images/css-3.png') }}" alt="html5 logo">
                <p class="technology-name">CSS</p>
            </div>
            <div class="technology-card">
                <img class="technology-logo" src="{{ asset('images/js.png') }}" alt="html5 logo">
                <p class="technology-name">JS</p>
            </div>
            <div class="technology-card">
                <img class="technology-logo" src="{{ asset('images/php.png') }}" alt="html5 logo">
                <p class="technology-name">PHP</p>
            </div>
        </div>
    </div>
</section>

<section class="projects" id="projects">
    <div class="section-wrapper projects-wrapper">
        <h2 class="projects-title">Korábbi munkáim</h2>
        <div class="my-projects">
            <a href="https://kuckotanuloszoba.hu" target="_blank" rel="noopener noreferrer">
                <div class="kucko-project project">
                    <img src="{{ asset('images/kucko.jpg') }}" alt="kuckó tanuloszóba">
                    <h3>Kuckó Tanulószoba</h3>
                </div>
            </a>
            <a href="https://negyevszakdemjen.hu" target="_blank" rel="noopener noreferrer">
                <div class="kucko-project project">
                    <img src="{{ asset('images/negyevszak.jpg') }}" alt="négy évszak vendégház">
                    <h3>Négy évszak vendégház</h3>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="contacts" id="contact">
    <div class="section-wrapper contacts-wrapper">
        <h2 class="contacts-title">Lépj kapcsolatba velem</h2>
        <div class="contact">
            <div>
                <a href="https://github.com/draszon" target="_blank" rel="noopener noreferrer">
                    <img class="contact-logo" src="{{ asset('images/github.svg') }}" alt="github logo">
                    <p>Github</p>
                </a>
            </div>
            <div>
                <a href="https://hu.linkedin.com/in/p%C3%A9ter-szentgy%C3%B6rgyi-5a4644375" target="_blank" rel="noopener noreferrer">
                    <img class="contact-logo" src="{{ asset('images/linkedin.svg') }}" alt="linkedin logo">
                    <p>LinkedIn</p>
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
