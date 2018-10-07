<!DOCTYPE html>
<html>
<head>
	<title>Program testowy</title>
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<nav>
				@guest
				<ul>
					<li><a href="/login">Zaloguj</a></li>
					<li><a href="/register">Zarejestruj</a></li>
				</ul>
				@else
				<ul>
					<li><a href="/list">Baza pacjentów</a></li>
					<li><a href="/add">Dodaj nowego</a></li>
				</ul>
				<div class="user">
					<p id="helloUser">{{ Auth::user()->name }}</p>
					<form id="logout" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" value="Wyloguj">
                    </form>
				</div>
				@endif
			</nav>
		</div>
	</header>
	<div class="container shadow">
		@yield('content')
	</div>
</body>
</html>