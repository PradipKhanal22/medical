<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Medical</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-white text-gray-800">
<div class= "flex justify-between px-20 bg-indigo-500 text-white py-2 mb-1">
        <div>
            <a href="" class="text-sans font-bold">9812965119</a>
        </div>
        <div>
        @auth
            <a href="" class="text-sans font-bold">HI, {{auth()->user()->name}}</a>
            <form action="{{route('logout')}}" method="POST" class="inline">
                @csrf
                <button type="submit" class="p-2 text-sans font-bold">Logout</button>
            </form>
            @else
            <a href="/login" class="font-bold p-2 hover:text-black">Login</a>
            @endauth
        </div>
    </div>
    <nav class="bg-black top-0 sticky z-10 text-white py-6 z-10">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="flex items-center">
             
                <a href="{{ route('home') }}" class="text-4xl font-bold hover:text-yellow-500">Medical Management </a>
            </div>
            <div class="flex space-x-8 text-xl">
                <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a>
               
                <a href="{{route('about')}}" class="hover:text-yellow-500">About</a>
                <a href="{{route('contact')}}" class="hover:text-yellow-500">Contact</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto my-10 px-6">
        @yield('content')
    </main>



 
    <footer class="bg-black text-white py-10 mt-10 justify-between">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 px-6">
            <div>
                <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
                <p>Email: <a href="#" class="text-gray-300 hover:text-yellow-500">test@gmail.com</a></p>
                <p>Phone: <a href="#" class="text-gray-300 hover:text-yellow-500">9742538007</a></p>
                <p>Address: 123,<br>Chitwan,<br>Nepal</p>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-4">Social Links</h2>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-yellow-500">Facebook</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-yellow-500">Twitter</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-yellow-500">Instagram</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-yellow-500">LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>