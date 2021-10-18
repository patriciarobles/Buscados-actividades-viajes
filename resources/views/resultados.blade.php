@extends('layout')

@section('content')

@if(!$activities->isEmpty())
    <h1 class="text-bold">Estas son las actividades que te proponemos</h1>
    <h3>{{ $date }}</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Actividad</th>
            <th scope="col">Precio por persona (€)</th>
            <th scope="col">Precio total ({{ $num }})</th>
            <th scope="col">Reservar</th>
            
          </tr>
        </thead>
        <tbody>
            <meta name="csrf-token" content="{!! csrf_token() !!}" />
            @foreach($activities as $activity)
          <tr>
            <td>{{ $activity->title}}</td>
            <td>{{ $activity->price}}</td>
            <td>{{ ($activity->price)*$num}}</td>
            <td><button onclick="bookActivity('{{ route('reservar') }}',{{$activity->id}},{{$num}},{{($activity->price)*$num}},'{{$date}}')" type="button" class="btn btn-primary">Reservar</button></td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div><a class="link" href="{{ route('welcome')}}">Volver atrás</a></div>

@else
    <h1>Upps..parece que no hemos encontrado nada</h1>
    <h2>¿Porqué no pruebas otra fecha?</h2>
    <div><a class="link" href="{{ route('welcome')}}">Volver a buscar</a></div>
@endif
     

@endsection