{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<div class="container my-5">
    <h1>Garage personale di simo tutor</h1>

    {{-- @dump($cars) --}}
    <ul>
        @foreach ($cars as $car)
            <li><a href="{{route('carsShow', ['id' => $car->id])}}">{{ $car->brand }} - {{$car->model}} - {{$car->production_year}}</a></li>
        @endforeach
    </ul>
</div>

@endsection


@section('titlePage')
    home
@endsection



