@extends('layouts.app')

@section('title', 'Kezdőlap')

@section('content')
<section class="introduction">
    <div class="introduction-wrapper">
        <div class="me">
            <div class="introduction-text-wrapper">
                <h1 class="introduction-title">Üdvözöllek!</h1>
                <p class="introduction-text">
                    Webfejlesztés? Nálam ez hobbi, szenvedély és felfedezés egyben.
                    Szabadidőmben kódsorokat írok és ötleteket valósítok meg.
                    Nézz körül ha kíváncsi vagy jelenlegi munkáimra.
                </p>
            </div>
        </div>
        <div class="introduction-logo">
            <img src="{{ asset('images/header_logo.png') }}" alt="fejléc logó">
        </div>
    </div>
</section>
@endsection
