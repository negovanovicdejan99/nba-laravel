@extends('layouts.app')

@section('title')
    {{$player->first_name}} {{$player->last_name}}
@endsection

@section('content')
        <div>
            <p>Name: {{$player->first_name}} {{$player->last_name}}</p>
            <p>Email: {{$player->email}}</p>
            <p>Team: <a href="{{route('singleTeam', ['id' => $player->team->id])}}">{{$player->team->name}}</a></p>
        </div>
@endsection