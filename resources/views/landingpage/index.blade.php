@extends('templates.main')
@section('content')
    <section class="hero-page">
        <div class="container">
            
            @foreach ($collections as $item)
            <h4 class="text-center">{{ $item->category->name }}</h4>
            <h4 class="">{{ $item->name }}</h4>
            @endforeach
        </div>
    </section>
@endsection