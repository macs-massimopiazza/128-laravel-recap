@extends('layouts.main')

@section('titlePage', 'Dettaglio auto')

{{-- @section('titlePage')
  Dettaglio auto
@endsection --}}

@section('content')
  <div class="container my-5">
    <a href="{{route('carsIndex')}}" class="btn btn-danger">Torna indietro</a>
    <h1>Dettaglio auto di simo</h1>
    <h2>Marca: {{$car->brand}}</h2>
    <span>Modello: {{$car->model}}</span><small> - {{ $car->fuel }}</small>
  </div>
@endsection