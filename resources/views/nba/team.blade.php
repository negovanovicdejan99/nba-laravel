@extends('layouts.app')

@section('title')
    {{$team->name}}
@endsection

@section('content')
    <div>
        <h3>{{$team->name}}</h3>
        <p>Email: {{$team->email}}</p> 
        <p>Address: {{$team->address}}</p> 
        <p>City: {{$team->city}}</p> 
    </div>
    <h5>Players:</h5>
    @foreach($team->players as $player)
      <div>
        <a href="{{route('player', ['id' => $player->id])}}"><p>{{$player->first_name}} {{$player->last_name}}</p><a>
      </div>
    @endforeach
@endsection
