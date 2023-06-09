<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text gray-800">

    <!--nav class="flex py-5 bg-indigo-500 text-white"-->
    <nav class="fixed top-0 left-0 right-0 flex py-5 bg-indigo-500 text-white">

        @if (auth()->check()) 
        <div class="w-1/2 px-12 mr-auto">
            <a href="{{ route('post.create') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">New Post</a>    
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li>
                <a href="{{route('home')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Home</a>
            </li>
            <li class="mx-6">
                <p class="text-xl">Hi <b>{{ auth()->user()->name }}</b></p>
            <li>
                <a href="{{ route('session.destroy') }}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Logout</a>
            </li>
        </ul>
        @else
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">Blog app</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            <li class="mx-6">
                <a href="{{ route('login') }}" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Login</a>
            </li>
            <li>
                <a href="{{route('register.create')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Register</a>
            </li>
        </ul>
        @endif

    </nav>
    @yield('content')
   
</body>
</html>
