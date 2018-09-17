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
				<ul>
					<li><a href="/list">Baza pacjentów</a></li>
					<li><a href="/add">Dodaj nowego</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container shadow">
		@yield('content')
	</div>
</body>
</html>