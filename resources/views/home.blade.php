

@extends('layouts.app')

@section('title', 'Home — KM.')

@section('content')
<!-- ...existing code... (only page content; navbar/footer removed) -->
<section id="introContent" class="pt-30 opacity-0 translate-y-4 transition-all duration-700 delay-75 flex flex-col items-center dark:text-amber-50">
	<article class="flex flex-col items-center lg:flex-row lg:justify-between">
		<a href="javascript: bouncingPfp()">
			<div id="pfp" class="">
				<img src="{{ asset('images/me.jpg') }}" alt="meeee" id="myPicture" class="m-5 items-center">
			</div>
		</a>

		<div class="flex flex-col items-center lg:items-start ">
			<div class="text-center m-2 lg:text-left">
				<h1 class="text-3xl font-extrabold">Keihan Pradika Muzaki</h1>
				<h2 class="text-xl py-1 font-semibold">Hi there! I'm Keihan, and I'm a student in Application development.</h2>
			</div>

			<div class="m-2 lg:flex lg:flex-row items-start space-x-4">
				<h2 class="text-xl font-semibold bg-orange-500 dark:bg-orange-700" id="headerRound">Skills:</h2>
				<ul style="list-style-type:disc" class="flex flex-col lg:flex-row space-x-4 list-disc font-semibold ml-4">
					<li>Python</li>
					<li>Java</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>Dart (Basic)</li>
					<li>Flutter Framework (Basic)</li>
				</ul>
			</div>
		</div>
	</article>

	<hr style="height: 1px; width: 35rem;">

	<!--Cards of projects-->
	<article  class="m-2 text-center">
		<h2 id="projectCards" class="transition-colors duration-100 ease-in rounded-xl text-2xl font-semibold mb-3">Projects</h2>
		<!--Projects or app that have been created-->
		{{-- <div class="m-3 grid gap-4 auto-rows-fr grid-cols-2 lg:grid-cols-4 lg:w-5xl">
			<!-- Card 1 -->
			<a href="https://github.com/kmuzaki/escapeRoomGame">
				<div class="dark:bg-gray-800 transition  duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
					<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Python text-based Escape room game</h3>
					<img id="cardImage" src="{{ asset('images/escape.jpg') }}" alt="">
					<p class="text-xs">
						A text-based escape room game on Python that I have made in the 1st semester of College. It consists of 3 levels and straightforward puzzles. This little game highlighted every major thing I have learned in Python.
					</p>
				</div>
			</a>

			<a href="https://github.com/kmuzaki/javaChessGame">
				<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
					<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Java chess game</h3>
					<img id="cardImage" src="{{ asset('images/chess.jpg') }}" alt="">
					<p class="text-xs ">
						A chess game created in Java. Something I have made during my free time out of curiosity. Particularly to realise what I've learned about OOP (Object-Oriented Programming)
					</p>
				</div>
			</a>

			<a href="https://github.com/kmuzaki/staticWebpageAssignment">
				<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
					<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Static webpage recreation</h3>
					<img id="cardImage" src="{{ asset('images/webpageRecreation.png') }}" alt="">
					<p class="text-xs ">
						Webpages that I was assigned to recreate by my lecturer based on my concept design in Figma. So far, there are 3 page layouts being implemented in my site. No Javascript implementation yet, but it's a start.
					</p>
				</div>
			</a>


			<a href="https://github.com/kmuzaki/DailyTaskManager">
				<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
					<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Daily Task Manager</h3>
					
					<p class="text-xs ">
						A second assignment in my OOP classroom at College. It utilises Arrays and LinkedList in Java. Though, it is far from perfect, but it gets the job done.
					</p>
				</div>
			</a>

		</div> --}}
		<div class="m-3 grid gap-4 auto-rows-fr grid-cols-2 lg:grid-cols-4 lg:w-5xl">
			@foreach($projects as $project)
				<a href="{{ $project->url ?? '#' }}">
					<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
						<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">{{ $project->name }}</h3>
						@if($project->image)
							<img id="cardImage" src="{{ $project->image }}" alt="">
						@endif
						<p class="text-xs">
							{{ $project->details }}
						</p>
					</div>
				</a>
			@endforeach
		</div>
	</article> 

	<!--Education section-->
	<article class="m-2 text-center">
		<h2 id="educationSection" class="transition-colors duration-100 ease-in rounded-xl text-2xl font-semibold mb-3">Educations</h2>
		<div class="m-3 grid gap-4 auto-rows-fr grid-cols-2 lg:grid-cols-4 lg:w-5xl">
			<!-- Card 1 -->
			<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
				<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">University of Ciputra</h3>
				<img id="cardImage" src="{{ asset('images/educations/ucMakassar.jpg') }}" alt="">
				<p class="text-l">
					2024 - 2028
				</p>
			</div>

			<!-- Card 2 (optional) -->
			<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
				<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">SMA Islam Athirah 1 Makassar</h3>
				<img id="cardImage" src="{{ asset('images/educations/athirah.jpg') }}" alt="">
				<p class="text-l">
					2021 - 2024
				</p>
			</div>

			<!-- Card 2 (optional) -->
			<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
				<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">SMP Islam Athirah 1 Makassar</h3>
				<img id="cardImage" src="{{ asset('images/educations/athirah.jpg') }}" alt="">
				<p class="text-l">
					2018 - 2021
				</p>
			</div>

			<!-- Card 2 (optional) -->
			<div class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
				<h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">SD Islam Al-Akhyar</h3>
				<img id="cardImage" src="{{ asset('images/educations/alAkhyar.webp') }}" alt="">
				<p class="text-l">
					2012 - 2018
				</p>
			</div>
		</div>
	</article>

	<hr style="height: 1px; width: 35rem;">
</section>
@endsection

@push('scripts')
<script>
function scrollToHome(){
	const getMeTo = document.getElementById("pfp");
	if (getMeTo) getMeTo.scrollIntoView({behavior: 'smooth'}, true);
}

function scrollToProjects(){
	const getMeTo = document.getElementById("projectCards");
	if (!getMeTo) return;
	getMeTo.scrollIntoView({behavior: 'smooth'}, true);
	getMeTo.classList.add('bg-amber-400', 'text-black');
	setTimeout(() => { getMeTo.classList.remove('bg-amber-400', 'text-black'); }, 1000);
}

function scrollToAbout(){
	const getMeTo = document.getElementById("aboutMe");
	if (!getMeTo) return;
	getMeTo.scrollIntoView({behavior: 'smooth'}, true);
	getMeTo.classList.add('bg-amber-400', 'text-black');
	setTimeout(() => { getMeTo.classList.remove('bg-amber-400', 'text-black'); }, 1000);
}

function bouncingPfp(){
	const pfp = document.getElementById("pfp");
	if (!pfp) return;
	pfp.classList.add('animate-bounce');
	setTimeout(() => { pfp.classList.remove('animate-bounce'); }, 1500);
}
</script>
@endpush