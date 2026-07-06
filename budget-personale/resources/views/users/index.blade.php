@extends('layouts.app')

@section('title', 'Lista utenti')

@section('content')
    <h1>Lista degli utenti</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
@endsection
