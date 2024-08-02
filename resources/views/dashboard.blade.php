@extends('layouts.app')
@section('title')Dashboard
@endsection
@section('content')
<div class="flex">
    <div class="grid grid-cols-3 gap-20 p-4  w-full">
        <div class="bg-blue-600 rounded-lg px-7 py-10 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-bold text-2xl ">
                Total Doctors :- {{$totaldoctors}}</p>
        </div>
        <div class="bg-red-600 rounded-lg px-7 py-10 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-bold text-2xl">Total Patients :- {{$totalpatients}}</p>
        </div>
        <div class="bg-purple-600 rounded-lg px-7 py-10 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-bold text-2xl">Total Users :- 100</p>
        </div>
        <div class="bg-yellow-600 rounded-lg px-7 py-10 hover:shadow-lg transform hover:scale-105 transition duration-300">
            <p class="font-bold text-2xl">Total Doctors :- 100</p>
        </div>
    </div>
</div>
@endsection