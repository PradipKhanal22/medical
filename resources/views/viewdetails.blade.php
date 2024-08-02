@extends('layouts.master')
@section('content')
<div class="grid grid-cols-4 px-20 my-10 gap-10">
        <div class="col-span-1">
            <img src="{{asset('images/'.$doctor->photopath)}}" alt="" class="h-72 w-full object-cover">
        </div>
        <div class="col-span-2 px-4 border-x">
            <h1 class="text-4xl font-bold text-blue-800">Name: {{$doctor->name}}</h1>
            <h1 class="text-2xl font-bold mt-4">Arrival Time: {{$doctor->arrival_time}}</h1>
            <form action="" method="POST">
            @csrf
                <div class="flex items-center">
                <a href="{{route('showregister',$doctor->id)}}" class="bg-green-600
                 text-white px-3 py-1.5 rounded-lg mt-4 inline-block">Get Appointment now</a>
            </form>
        </div>
    </div>
    <div class="col-span-1 space-y-4">
            <div class="p-4 bg-green-50 border-l-4 border-green-500 text-green-700">
                <p class="font-bold">Speciality</p>
                <p class="text-sm">{{$doctor->speciality}}</p>
            </div>
            <div class="p-4 bg-blue-50 border-l-4 border-blue-500 text-blue-700">
                <p class="font-bold">What our Doctor says.....!</p>
                <p class="text-sm text-left">Medical terminology is the specialized language used in healthcare to accurately 
                    describe the human body, 
                    its parts, functions, and the procedures performed on it</p>
            </div>
        </div>
@endsection