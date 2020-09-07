@extends('layouts.app')

@section('title', 'Teams')

@section('content')
    <h3>Teams:</h3>
    @foreach ($teams as $team)
        <div>
        <a href="{{route('singleTeam', ['id' => $team->id])}}"><p>{{$team->name}}</p></a>
        </div>
    @endforeach
@endsection