@extends('layouts.app')

@section('title', 'Lista transazioni')

@section('content')
    <h1>Lista delle transazioni</h1>
    <ul>
        @foreach ($transactions as $transaction)
            <li>{{ $transaction->description }}</li>
        @endforeach
    </ul>
@endsection