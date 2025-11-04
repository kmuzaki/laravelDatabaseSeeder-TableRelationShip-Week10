
@extends('layouts.app')

@section('title', 'About — KM.')

@section('content')
    <section id="introContent" class="pt-15 flex flex-col items-center dark:text-amber-50">
        <div class="w-full max-w-6xl mx-7 border-8 border-black rounded-2xl p-4">
                <div class="flex flex-col lg:flex-row items-start gap-8">

                    <!-- Left: portrait with framed border -->
                    <figure class="w-full lg:w-1/3 flex-shrink-0">
                        <div class="inline-block p-3 rounded-xl bg-white border- border-black">
                            <div class="rounded-md overflow-hidden bg-white">
                                <img
                                    src="{{ asset('images/me.jpg') }}"
                                    alt="Keihan"
                                    class="w-[320px] md:w-[380px] lg:w-[420px] h-auto max-h-[560px] object-contain block"
                                />
                            </div>
                        </div>
                    </figure>

                    <!-- Right: About text -->
                    <article class="flex-1 mx-7">
                        <h1 class="text-6xl font-extrabold mb-4">About me</h1>

                        <p class="text-base text-gray-700 mb-4">
                            My name is Keihan Pradika Muzaki. I'm a student at Universitas Ciputra Makassar who is now in his first semester of his study in Informatics. I'm currently studying Java and make simple apps in the programming language itself and I look forward for my next projects to come.
                        </p>

                        <p class="text-base text-gray-700 mb-1"><strong><a href="{{ url('contact') }}"><u>My contacts</u></a></strong></p>
                    </article>
                </div>
        </div>
    </section>
@endsection

    <footer id="mainFooter" class="flex flex-col items-center">
        <p class="text-sm italic">By Keihan 2025</p>
    </footer>
    
</body>
</html>