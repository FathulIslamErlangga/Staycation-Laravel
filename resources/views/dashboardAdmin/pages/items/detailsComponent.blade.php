@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="container detail-service">
      <div class="card mb-3">
        {{-- <img src="{{ asset('storage/' . $items->gallery->gallery )}}" class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">{{ $items->name }}</h5>
          <p class="card-text">{{ $items->city }}</p>
          <p class="card-text">{{ $items->country }}</p>
          <p class="card-text">{{ $items->price}}</p>
          <p class="card-text">{!! $items->description !!}</p>
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        </div>
      </div>
    </section>
@endsection