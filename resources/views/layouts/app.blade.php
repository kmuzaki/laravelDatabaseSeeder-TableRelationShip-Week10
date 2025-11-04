@extends('partials.navbar')
@extends('partials.footer')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>@yield('title', 'KM.')</title>

	{{-- shared CSS (ensure files are in public/css/home) --}}
	<link rel="stylesheet" href="{{ asset('css/home/output.css') }}">
	<link rel="stylesheet" href="{{ asset('css/home/custom.css') }}">

	@yield('head')
</head>
<body class="bg-white dark:bg-blue-950">
	{{-- navbar is included via @extends at the top --}}
	@section('navbbar')
		@parent
	@endsection

	<main class="pt-16"> {{-- leave top padding for fixed nav --}}
		@yield('content')
	</main>

	@section('footer')
		@parent
	@endsection

	{{-- small shared script: reveal introContent if present --}}
	<script>
		window.addEventListener('DOMContentLoaded', () => {
			const content = document.getElementById('introContent');
			if (content) {
				requestAnimationFrame(() => {
					content.classList.remove('opacity-0','translate-y-4');
					content.classList.add('opacity-100','translate-y-0');
				});
			}
		});
	</script>

	@stack('scripts')
</body>
</html>
