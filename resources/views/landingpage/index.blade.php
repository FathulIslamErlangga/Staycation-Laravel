@extends('templates.main')
@section('content')
    <section class="landing-hero">
        <div class="hero container">
            <div class="row align-items-center">
              <div class="content-hero col-6">
                <h1 class=" line-height-1 mb-3">
                   Forget Busy Work <br/>
                   Start Next Vacation
                </h1>
                <p className="mb-4">
                 We provide what you need to enjoy your holiday with family. 
                 Time to make another memorable moments.
                </p>
                <a href="" class="btn px-5">Show Me Now</a>
                <div class="row parts">
                  <div class="col-auto list-inline-item">
                    <img
                    src="/assets/images/icons/ic_traveler.png" alt="">
                    <h6 class="mt-3">
                      {{ number_format($hero['travelers']) }}
                      <span>travelers</span>
                    </h6>
                  </div>
                  <div class="col-auto list-inline-item" style="margin-right: 30px;">
                    <img
                    src="/assets/images/icons/ic_treasure.png" alt="">
                  <h6 class="mt-3">
                    {{ number_format($hero['treasures'])}}
                    <span>treasure</span>
                  </h6>
                  </div>
                  <div class="col-auto list-inline-item">
                    <img
                    src="/assets/images/icons/ic_cities.png" alt="">
                  <h6 class="mt-3">
                    {{ number_format($hero['cities']) }}
                    <span>cities</span>
                  </h6>
                  </div>
                </div>
            
              </div>
              <div class="col-6 pt-4 content-image">
                <div class="image-hero">
                  <img src="/assets/images/icons/picture.png" class="picture img-fluid position-absolute" alt="Room with couches">
                  <img src="/assets/images/icons/frame.png" class="frame img-fluid position-absolute"  alt="Room with couches frame">
                </div>
              </div>
            </div>
          </div>
    </section>
    <section class="landing-category">
        @include('landingpage.categories')
    </section>
    <section class="testimony-page">
        @include('landingpage.testimony')
    </section>
@endsection