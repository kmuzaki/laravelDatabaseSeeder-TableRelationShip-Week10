@section('navbbar')
<nav class="fixed w-full top-0 z-50 flex flex-row sm:flex-row bg-blue-300 p-3 justify-between">
    <h1 class="font-extrabold">KM.</h1>

    <div id="myLinks" class="content-between">
        <a class="font-semibold transition duration-100 ease-in hover:bg-blue-700 hover:text-white hover:p-1 hover:border-0 hover:rounded-md" href="{{ url('/') }}">Home</a>
        <a class="font-semibold transition duration-100 ease-in hover:bg-blue-700 hover:text-white hover:p-1 hover:border-0 hover:rounded-md" href="{{ url('/blog') }}">Blog</a>
        <a class="font-semibold transition duration-100 ease-in hover:bg-blue-700 hover:text-white hover:p-1 hover:border-0 hover:rounded-md" href="{{ url('/about') }}">About</a>
        <a class="font-semibold transition duration-100 ease-in hover:bg-blue-700 hover:text-white hover:p-1 hover:border-0 hover:rounded-md" href="{{ url('/contact') }}">Contact</a>
    </div>
</nav>
@show