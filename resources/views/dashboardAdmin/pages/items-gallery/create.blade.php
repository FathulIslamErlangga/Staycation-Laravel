@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="create-gallery">
        <div class="card">
            <div class="card-header">
                <strong>Tambah items image</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('list-gallery.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name item</label>
                        <select name="item_id" class="form-control @error('item_id') is-invalid @enderror">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                        </select>
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