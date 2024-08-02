@extends('layouts.master')

@section('content')
<!-- Header -->
<header class="relative h-screen bg-cover bg-center" style="border-radius:10px; background-image: 
url('https://media.istockphoto.com/id/675458912/photo/doctors-group-surgeon-and-nurse-on-hospital-background.jpg?s=170667a&w=0&k=20&c=ZD2sEJ2nMrZgSSJOgDH2WlHpzpcAo-dc395mN1f1lUA=');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto h-full flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-4xl md:text-6xl font-bold">Medical management System</h1>
        <p class="text-md md:text-xl mt-4">The good physician treats the disease, the great physician treats the patient who has the disease.</p>
    </div>
</header>

<div class="mt-20 bg-gray-100 py-5 mb-4">
    <h2 class="text-4xl font-bold mb-6 text-center text-indigo-700">Our Doctors</h2>
</div>
<div class="grid grid-cols-3 gap-10 px-20 py-12">
    @forelse($doctors as $doctor)
    <div class="rounded-lg shadow-md p-4 bg-white hover:shadow-lg transform hover:scale-105 transition duration-300">
      <div>
        <img src="{{ asset('images/' . $doctor->photopath) }}" alt="{{ $doctor->name }}" class="h-52 w-full rounded-t-lg">
        <h1 class="text-xl font-bold mt-2">Doctor Name: {{ $doctor->name }}</h1>
        <p class="text-gray-500">Doctor Speciality: {{ $doctor->speciality }}</p>
        <p class="text-gray-500">Arrival Time: {{$doctor->arrival_time }}</p>
        </div>
        <div class=" justify-between items-center mt-4">
        <a href="{{route('viewdetails',$doctor->id)}}" class="bg-orange-500 p-2 rounded-lg">Viewdetails</a>
        </div>
    </div>
    @empty
    <div class="col-span-4 text-center">
        <p class="text-gray-500 text-lg">No doctors available.</p>
    </div>
    @endforelse
</div>
@endsection