@extends('layouts.master')
@section('content')
<header class="relative h-screen bg-cover bg-center" style="background-image: url('https://www.mypremiumeurope.com/img/image_db/dermatology_main-1920.jpg');">
    <div class="absolute inset-0  "></div>
    <div class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-white">
    <div class="w-80">
    <form action="{{route('patients.store')}}" method="POST" class="w-full mx-auto bg-gray-200  shadow-lg border-bg-black px-8 py-8  mt-20 rounded-lg">
        @csrf
        <div class="mb-4"> 
        <h1 class="text-4xl bg-red-400 text-center mt-0 p-3 rounded-lg font-bold">Register Now</h1> 
        </div>
    <div class="mb-4 w-full">  
    <input type="hidden" name="doctor_id" value="{{request('id')}}">
    </div>   
    <div class="mb-4">
        <input type="text" placeholder="Enter Name" class="p-4 w-full rounded-lg text-black"
        name="name">
    </div>
    <div class="mb-4 ">
        <input type="text" placeholder="Enter Address" class=" text-black p-3 w-full rounded-lg"
        name="address">
    </div>
    <div class="mb-4">
        <input type="text" placeholder="Enter Phone" class="text-black p-3 w-full rounded-lg"
        name="phone">
    </div>
    <div class="mb-4">
        <input type="text" placeholder="Enter Age" class="text-black p-3 w-full rounded-lg"
        name="age">
    </div>
    <div class="mb-4 text-black text-bold"><p class="text-black text-black text-bold">Gender</p>
       <input type="radio" name="gender" value="male" >  Male
       <input type="radio" name="gender" value="female">  Female
    </div>
    <div class="mb-4">
        <textarea type="text" placeholder="Mention Your Problem" class="text-black p-3 w-full rounded-lg"
        name="problem"></textarea>
    </div>
    <div class="mb-4">
    <button href=""class="bg-blue-500 text-white w-20 p-3 rounded-lg mt-5 hover:bg-blue-600 transition duration-300">submit</button>
        <a class="bg-red-500 text-white  p-3 rounded-lg mt-5 hover:bg-blue-600 transition duration-300">
            Cancel</a>
    </div>
    </div>
    </form>
    </div>
</header>
@endsection


