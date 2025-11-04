
@extends('layouts.app')

@section('title', 'Blog — KM.')

@section('content')
<section id="introContent" class="pt-20 opacity-0 translate-y-4 transition-all duration-700 delay-75 flex flex-col items-center dark:text-amber-50">
        <!-- Blog header -->
        <div class="w-full max-w-7xl px-4 pt-10 pb-6">
            <h1 class="text-4xl font-extrabold mb-3">My Blog</h1>
            <p class="text-gray-600 dark:text-gray-300 mb-8">Thoughts, ideas, and insights about programming and tech.</p>
        </div>
                
        <!-- Blog posts grid -->
        <div class="w-full max-w-7xl px-4 mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($blogs as $blog)            
                    <!-- Blog post 3 -->
                    <article class="dark:bg-gray-800 transition duration-150 ease-out hover:-translate-y-3 hover:scale-100 border-3 border-gray-300 rounded-lg shadow overflow-hidden flex flex-col h-full">
                        <div class="p-4 flex flex-col flex-1">
                            <div class="flex items-center text-xs text-gray-500 dark:text-gray-400 mb-2">
                                <span>{{ $blog->created_at }}</span>
                                <span class="mx-5">•</span>
                                <span>{{ $blog->category }}</span>
                            </div>
                            <h3 class="text-xl font-semibold mb-2">{{ $blog->title }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 flex-1 mb-4">
                                {{ $blog->details }}
                            </p>
                            <a href="#" class="text-blue-500 dark:text-blue-400 text-sm font-semibold hover:underline">Read more →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="w-full max-w-7xl px-4 flex justify-center mb-10">
            <div class="flex space-x-2">
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-white">Previous</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md dark:border-gray-600 bg-blue-500 text-white">1</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-white">2</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-white">3</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-700 dark:text-white">Next</a>
            </div>
        </div>
    </section>
@endsection