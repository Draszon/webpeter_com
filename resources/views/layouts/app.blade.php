<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="icon" type="image/png" href="{{ asset('images/icon_logo.png') }}">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/33e91eb866.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<script src="{{ asset('js/main.js') }}"></script>

	<title>@yield('title', 'Peter')</title>
</head>
<body>
	<header id="#nav">
		<div class="header-wrapper">
			<h3 class="logo">Peter</h3>
			<nav>
				<ul>
					<li class="nav-item"><a href="#nav">Főoldal</a></li>
					<li class="nav-item"><a href="#about-me">Rólam</a></li>
					<li class="nav-item"><a href="#technology">Technológiák</a></li>
					<li class="nav-item"><a href="#projects">Projektek</a></li>
					<li class="nav-item"><a href="#contact">Elérhetőségek</a></li>
				</ul>
			</nav>
		</div>
		
	</header>

	<main>
		@yield('content')
	</main>

	<footer>
		<p>© 2025 DRASZON. Minden jog fenntartva.</p>
	</footer>
</body>
</html>     