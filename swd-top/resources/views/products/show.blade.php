@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>Welcome to our product page! Here you can find a variety of products that we offer. Browse through our selection and
        find the perfect item for your needs.</p>


    <article>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">

    @endsection()
