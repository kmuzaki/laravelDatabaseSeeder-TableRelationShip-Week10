@extends('layouts.app')

@section('title', 'Contact — KM.')

@section('content')
<section id="introContent" class="pt-20 opacity-0 translate-y-4 transition-all duration-700 delay-75 flex flex-col items-center dark:text-amber-50">
                
        <!--Cards of projects-->
        <article  class="m-2 text-center items-center">
            <h2 id="projectCards" class="pb-7 transition-colors duration-100 ease-in rounded-xl text-2xl font-semibold mb-3">My Contacts</h2>
            <!--Projects or app that have been created-->
            <div class="m-3 grid gap-4 auto-rows-fr grid-cols-2 lg:grid-cols-4 lg:w-5xl justify-center justify-items-center">
                <!-- Card 1 -->
                {{-- <a href="https://www.instagram.com/keihanpradika/">
                    <div class="dark:bg-gray-800 transition  duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
                        <h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Instagram</h3>
                        <img id="cardImage" src="{{ asset('images/contacts/ig.jpg') }}" alt="">
                        <p class="text-xs">
                            @keihanpradika
                        </p>
                    </div>
                </a>

                <a href="mailto:keihanmuzaki0480@gmail.com">
                    <div class="dark:bg-gray-800 transition  duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
                        <h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Email</h3>
                        <img id="cardImage" src="{{ asset('images/contacts/gmail.png') }}" alt="">
                        <p class="text-xs">
                            keihanmuzaki0480@gmail.com
                        </p>
                    </div>
                </a>

                <a href="https://www.linkedin.com/in/keihan-pradika-muzaki-61a43233b/">
                    <div class="dark:bg-gray-800 transition  duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
                        <h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">Linkedin</h3>
                        <img id="cardImage" src="{{ asset('images/contacts/linkedin.png') }}" alt="">
                        <p class="text-xs">
                            Keihan Pradika Muzaki
                        </p>
                    </div>
                </a> --}}
                @foreach($contacts as $contact)
                    <a href="{{ $contact->url ?? '#' }}">
                        <div class="dark:bg-gray-800 transition  duration-150 ease-out hover:-translate-y-3 hover:scale-100 p-3 border-3 border-gray-300 rounded-lg shadow h-full content-center">
                            <h3 id="headerRound" class="text-base font-semibold mb-1 bg-orange-500 dark:bg-orange-700">{{ $contact->name }}</h3>
                            <img id="cardImage" src="{{ $contact->logo }}" alt="">
                            <p class="text-xs">
                                {{ $contact->details }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </article> 
    </section>
@endsection