@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="create-gallery">
        <div class="card">
            <div class="card-header">
                <strong>Tambah items activity</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('list-activity.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name activity</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name item</label>
                        <select name="item_id" class="form-control @error('item_id') is-invalid @enderror">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isPopuler" class="form-control-label d-block">Populer</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isPopuler" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">ya</label>
                        </div>
                        &nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="isPopuler" id="inlineRadio1" value="0">
                            <label class="form-check-label" for="inlineRadio1">tidak</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-control-label">Type activity</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-control-label">image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">
                            Tambah Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection