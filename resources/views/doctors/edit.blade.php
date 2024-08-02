
@section('title')Edit Doctor
@endsection
@section('content')
<form action="{{route('doctors.update',$doctor->id)}}" class="mt-5" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <input type="text" placeholder="Enter Doctor Name" class="p-3 w-full rounded-lg"
        name="name" value="{{$doctor->name}}">
        @error('name')
        <div class="text-red-600 mt-2 text-5m">
            *{{$message}}
             </div>
             @enderror
    </div>
    <div class="grid grid-cols-2 gap-10">
    <div class="mb-5">
        <input type="text" placeholder="Enter Speciality" class="p-3 w-full rounded-lg"
        name="speciality" value="{{$doctor->speciality}}">
        @error('speciality')
        <div class="text-red-600 mt-2 text-5m">
            *{{$message}}
             </div>
             @enderror
    </div>
    <div class="mb-5">
        <input type="text" placeholder="Enter Arrival Time" class="p-3 w-full rounded-lg"
        name="arrival_time" value="{{$doctor->arrival_time}}">
        @error('arrival_time')
        <div class="text-red-600 mt-2 text-5m">
            *{{$message}}
             </div>
             @enderror
    </div>
    </div>
    <p>Current Picture</p>
    <img src="{{asset('images/'.$doctor->photopath)}}" alt="" class="h-44">
    <div class="mb-5">
        <input type="file" class="p-3 w-full rounded-lg" name="photopath">
        @error('photopath')
        <div class="text-red-600 mt-2 text-5m">
            *{{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-600 text-white py-3 px-5 rounded-md font-bold">Update Doctor</button>
        <a href="{{ route('doctors.index') }}" class="bg-lime-500 text-white py-3 px-5 rounded-md font-bold ml-3">Cancel</a>
    </div>
</form>
@endsection
