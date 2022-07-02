<div class="container">
    <div class="data-category">
        @foreach ($data as $item)
            @if ($item->id == 1)
                <div class="mostpicked">
                    <h4 class="mb-4">{{ $item->name }}</h4>
                    <div class="container-grid">
                        @foreach ($item->items as $i)
                        <div class="column-4 item {{ $i->id == 1 ? 'row-2' : 'row-1'}}">
                            <div class="card card-featured">
                                <div class="tag">
                                    IDR {{ number_format($i->price) }}
                                    <span class="font-wight-light">
                                        one night
                                    </span>
                                </div>
                                <figure class="img-wrapper">
                                    <img class="img-cover" 
                                    src="storage/{{ $i->gallery[0]->image }}" alt="{{ $i->name }}">
                                </figure>
                                <div class="meta-wrapper">
                                    <a class=" text-decoration-none text-white d-block" href="penginapan/{{ $i->slug }}">
                                        <h5>{{ $i->name }}</h5>
                                    </a>
                                    <span>
                                        {{ $i->city }} {{ $i->country }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="list-category">
                    <h4 class="mb-4">{{ $item->name }}</h4>
                    <div class="container-grid">
                        @foreach ($item->items as $i)
                            <div class="item column-3 row-1">
                                <div class="card">
                                    @if ($i->isPopuler == 1)
                                        <div class="tag">
                                            Populer
                                            <span className="font-wight-light">Choise</span>
                                        </div>
                                    @endif
                                    <figure class="img-wrapper mb-3">
                                        <img class="img-cover" src="storage/{{ $i->gallery[0]->image }}" alt="{{ $i->name }}">
                                    </figure>
                                      <div class="meta-wrapper">
                                            <a href="penginapan/{{ $i->slug }}" class=" text-decoration-none d-block"  style="color: #152C5B;">
                                                <h5>{{ $i->name }}</h5>
                                            </a>
                                            <span class="sub-title">
                                                {{ $i->city }} {{ $i->country }}
                                            </span>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>