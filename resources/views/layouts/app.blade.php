
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white">
    <div class="flex">
        <div class="w-56 h-screen sticky top-0 bg-white shadow-lg">
            <div class="flex flex-col items-center mt-5">
                <img src="https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/06/medical-logo.jpg" alt="Logo"
                     class="w-8/12 mx-auto bg-blue-400 p-2 rounded-lg shadow-lg" >
                <span class="mt-3 font-bold text-xl">Medial</span>
            </div>
            <div class="mt-5 space-y-1">
                <a href="{{route('dashboard')}}" class="p-3 text-gray-700 hover:bg-gray-300 flex items-center">
                     Dashboard
                </a>
                <a href="{{route('doctors.index')}}" class="p-3 text-gray-700 hover:bg-gray-300 flex items-center">
                     Doctors
                </a>
                <a href="{{route('patients.index')}}" class="p-3 text-gray-700 hover:bg-gray-300 flex items-center">
                    Patients
                </a>
                <a href="" class="p-3 text-gray-700 hover:bg-gray-300 flex items-center">
                    Users
                </a>
                <a href="{{route('home')}}" class="p-3 text-gray-700 hover:bg-gray-300 flex items-center">
                    Logout
                </a>
            </div>
        </div>
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-6xl font-bold">@yield('title')</h1>
            </div>
            <hr class="h-1 bg-Black mb-6">
           
            @yield('content')
        </div>
    </div>
</body>
</html>
