@extends('templates.main')
@section('content')
<section class="container pages-detail"> 
    <div class="text-center mb-5 title-lodging">
        <h1>{{$items->name}}</h1>
        <span>{{$items->city}} <span>{{$items->country}}</span></span>
    </div>
    <div class="container-grid mb-5 sm">
        <div class="item row-2 column-7">
            <div class="card">
                <figure class="img-wrapper">
                    <img src="/storage/{{ $items->gallery[1]['image']}}" class="img-cover" 
                    alt="{{ $items->gallery[1]['id']}}">
                </figure>
            </div>
        </div>
        <div class="item row-1 column-5">
            <div class="card">
                <figure class="img-wrapper">
                    <img src="/storage/{{ $items->gallery[2]['image']}}" class="img-cover" 
                    alt="{{ $items->gallery[2]['id']}}">
                </figure>
            </div>
        </div>
        <div class="item row-1 column-5">
            <div class="card">
                <figure class="img-wrapper">
                    <img src="/storage/{{ $items->gallery[3]['image']}}" class="img-cover" 
                    alt="{{ $items->gallery[3]['id']}}">
                </figure>
            </div>
        </div>
    </div>
    <div class="row description-content mb-5">
        <h3>About the place</h3>
        <div class="col-7 pr-5" >
            <span>{!! $items->description !!}</span>
            <div class="row feature">
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-1.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['bedroom']}} <span>Bedroom</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-2.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['livingroom']}} <span>Livingroom</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-4.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['bathroom']}} <span>Bathroom</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-3.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['diningroom']}} <span>Diningroom</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-5.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['wifi']}} <span>Mbps</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-6.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['smalltable']}} <span>Smalltable</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-7.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['wardrobe']}} <span>Refigrator</span></h6>
                </div>
                <div class="col-3 pt-3">
                    <img src="/assets/images/icons/feature/feature-8.png" alt="" style="width: 38px;">
                        <h6 class="mt-3">{{$feature['television']}} <span>Television</span></h6>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card bordered" >
                <h4 class="mb-3 ">
                    Start Booking
                </h4>
                <h5 class=" text-teal">
                    IDR {{ number_format($items->price) }}
                    <span class="text-gray-500 font-weight-light">per Night</span>
                </h5>
                <div class="counter row">
                    <span class="mb-3" style="color: #000;">How long you will stay?</span>
                    <button class="minus btn btn-danger col-auto">-</button>
                    <input type="text"  class='form-control text-center col-auto' placeholder="1 night">
                    <button class="plush btn btn-success col-auto">+</button>
                </div>
                <div class="counter-date row">
                    <button class="calender btn col-auto">
                        <img src="/assets/images/icons/ic_calendar.png" alt="">
                    </button>
                    <input type="date"  class='form-control text-center col-auto' >
                </div>
                <span class="pt-3 mb-3 text-gray-500">You will pay <span style="color: #152C5B;">IDR{{number_format($items->price)}}</span> per <span  style="color: #152C5B;"> 1 night</span>
                </span>
                <a href="" class="btn px-5">Show Me Now</a>
            </div>
        </div>
    </div>
            <h4>Treasure to Choose</h4>
        <div class="pt-4 list-activity container-grid ">
            @foreach ($items->activity as $item)
            <div class="item row-1 column-3">
                <div class="card">
                    @if ($item->isPopuler == 1)
                        <div class="tag">
                            Populer
                                <span className="font-wight-light">Choise</span>
                        </div>
                    @endif
                    <figure class="img-wrapper">
                        <img src="/storage/{{ $item->image }}" alt="{{ $item->name }}" class="img-cover">
                    </figure>
                    <div class="meta-wrapper">
                        <a href="" class=" text-decoration-none d-block"  style="color: #152C5B;">
                            <h5>{{ $item->name }}</h5>
                        </a>
                        <span class="sub-title">
                             {{ $item->type}}
                        </span>
                     </div>
                </div>
            </div>          
            @endforeach
    </div>
    <section class="testimony-page">
        @include('detailsItem.testimony')
    </section>
</section>
@endsection