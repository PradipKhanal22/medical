@extends('layouts.app')
@section('title') Patients @endsection
@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-3xl font-bold text-center mb-10"></h1>
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="border p-2 bg-green-700 text-white">S.N</th>
                <th class="border p-2 bg-green-700 text-white">Patient Name</th>
                <th class="border p-2 bg-green-700 text-white">Address</th>
                <th class="border p-2 bg-green-700 text-white">Phone</th>
                <th class="border p-2 bg-green-700 text-white">Age</th>
                <th class="border p-2 bg-green-700 text-white">Gender</th>
                <th class="border p-2 bg-green-700 text-white">Problem</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr class="bg-gray-50 hover:bg-gray-100">
                <td class="border p-2 text-center">{{$loop->iteration}}</td>
                <td class="border p-2 text-center">{{$patient->name}}</td>
                <td class="border p-2 text-center">{{$patient->address}}</</td>
                <td class="border p-2 text-center">{{$patient->phone}}</</td>
                <td class="border p-2 text-center">{{$patient->age}}</</td>
                <td class="border p-2 text-center">{{$patient->gender}}</</td>
                <td class="border p-2 text-center">{{$patient->problem}}</</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection