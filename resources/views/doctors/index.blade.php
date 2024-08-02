@extends('layouts.app')
@section('title')Doctors
@endsection
@section('content')
<div class="text-right my-5">
    <a href="{{route('doctors.create')}}" class="bg-red-700 text-white py-3 px-5 rounded-md front-bold">Add Doctor</a>
</div>
<table class="mt-5 w-full">
    <thead>
        <tr>
            <th class="border p-2 bg-blue-500">S.N.</th>
            <th class="border p-2 bg-blue-500">Doctor Name</th>
            <th class="border p-2 bg-blue-500">Speciality</th>
            <th class="border p-2 bg-blue-500">Arrival Time</th>
            <th class="border p-2 bg-blue-500">Picture</th>
            <th class="border p-2 bg-blue-500">Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach($doctors as $doctor)
        <tr class="text-center bg-yellow-200">
            <td class="border p-2">{{$loop->iteration}}</td>
            <td class="border p-2">{{$doctor->name}}</td>
            <td class="border p-2">{{$doctor->speciality}}</td>
            <td class="border p-2">{{$doctor->arrival_time}}</td>
            <td class="border p-2">
                <img src="{{ asset('images/' . $doctor->photopath) }}" alt="" class="h-20">
            </td>
            <td class="border p-2"> 
                <a href="{{route('doctors.edit',$doctor->id)}}
                "class="bg-indigo-700 text-white px-3 py-1.5 rounded-lg">Edit</a>
                <a href="{{route('doctors.destroy',$doctor->id)}}"
                class="bg-red-700 text-white px-3 py-1.5 rounded-lg"
                onclick= "return confirm('Are you sure to delete')">Delete</a>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>

@endsection

