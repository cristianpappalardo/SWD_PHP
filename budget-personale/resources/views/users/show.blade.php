@extends('layouts.app')
@section('title', 'Dettagli utente')

@section('content')
    <h1>Dettagli dell'utente</h1>
    <p>Nome: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
@endsection
