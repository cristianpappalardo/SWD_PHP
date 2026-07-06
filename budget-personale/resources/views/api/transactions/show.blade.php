@extends('layouts.app')
@section('title', 'Dettagli transazione')

@section('content')
    <h1>Dettagli della transazione</h1>
    <p>Descrizione: {{ $transaction->description }}</p>
    <p>Importo: {{ $transaction->amount }}</p>
@endsection
