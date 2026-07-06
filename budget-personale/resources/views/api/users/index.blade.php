@extends('layouts.app')

@section('title', 'API Users')
<h1>API Users</h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>
@endsection
