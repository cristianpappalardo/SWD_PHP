@extends('layouts.app')

@section('title', 'API Transactions')
<h1>API Transactions</h1>
<ul>
    @foreach ($transactions as $transaction)
        <li>{{ $transaction->description }}</li>
    @endforeach
</ul>
@endsection
