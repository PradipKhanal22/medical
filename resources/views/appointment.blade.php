@extends('layouts.master')
@section('content')
<header class="relative h-screen bg-cover bg-center" style="border-radius:10px; background-image: 
url('https://allayhomehealthservices.com/wp-content/uploads/2020/11/allayabout1-1.png');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold">Medical management System</h1>
        <p class="text-md md:text-xl mt-4">The good physician treats the disease; the great physician treats the patient who has the disease.</p>
    </div>
</header>

<h1 class="text-4xl bg-blue-600 text-center mt-4 p-3 rounded-lg font-bold">Register Now</h1>

<div>
    <form action="" class="mt-3">
    <div class="mb-5">
        <input type="text" placeholder="Enter Name" class="p-3 w-full rounded-lg"
        name="name">
    </div>
    <div class="mb-5">
        <input type="text" placeholder="Enter Address" class="p-3 w-full rounded-lg"
        name="name">
    </div>
    <div class="mb-5">
        <input type="text" placeholder="Enter Phone" class="p-3 w-full rounded-lg"
        name="name">
    </div>
    <div class="mb-5">
        <input type="text" placeholder="Enter Age" class="p-3 w-full rounded-lg"
        name="name">
    </div>
    <div class="mb-5"><p class="font-bold">Gender</p>
       <input type="radio" name="gender" value="male">  Male
       <input type="radio" name="gender" value="female">  Female
    </div>
    <div class="mb-5">
        <textarea type="text" placeholder="Mention Your Problem" class="p-3 w-full rounded-lg"
        name="name"></textarea>
    </div>
    <div class="mb-5">
        <input type="submit" value="Submit" class="p-2 bg-blue-600 rounded-lg font-bold">
        <input type="reset" value="Cancel"  class="p-2 bg-red-600 rounded-lg font-bold">
    </div>
    </form>
</div>
@endsection