@extends('layouts.app')
@section('content')
    <h1>Lista dei Film in Sala</h1>
    <ul>
        @foreach ($filmInSalas as $filmInSala)
            <li>{{ $filmInSala->posti_rimanenti }}</li>
        @endforeach
    </ul>
@endsection
