<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="grid grid-cols-2">
        <img src="https://th.bing.com/th/id/OIP.h0D0JST5LJjHeT0J_dxHCQAAAA?w=414&h=468&rs=1&pid=ImgDetMain"
         alt="" class="h-screen w-full border-r">
         <div class="flex items-center justify-center bg-gray-400">
            <div class="text-center w-6/12">
                <h1 class="text-2xl font-bold">Login</h1>
                <form action="{{route('login')}}" method="POST" class="mt-5">
                    @csrf
                    <input type="email" name="email" placeholder="Email"
                    class="block w-full p-3 rounded-lg border-gray-400 mb-3">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <input type="password" name="password" placeholder="Password"
                    class="block w-full p-3 rounded-lg border-gray-400 mb-3">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    <p class="my-5 text-right text-blue-500">
                    <a href="">Forgot Password ?</a>
                    </p>
                    <button type="submit" class=" bg-blue-500 text-white p-3 w-full rounded-lg">
                        Login
                    </button>
                </form>
            </div>
         </div>
    </div>

</body>
</html>