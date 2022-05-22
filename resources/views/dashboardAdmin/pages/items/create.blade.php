@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="create-item">
        <div class="card">
            <div class="card-header">
                <strong>Tambah Data</strong>
            </div>
            <div class="card-body card-block">
                <form action="{{ route('list-item.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label">Name item</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-select">Category</label>
                        <div class="uk-form-controls">
                            <select class="uk-select" id="form-stacked-select" name="category_id">
                                @foreach ($items as $item)
                                    <option value="{{ $item->category->id }}">{{ $item->category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="form-control-label">City</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}">
                    </div>
                    <div class="form-group">
                        <label for="country" class="form-control-label">country</label>
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country') }}">
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-control-label">price</label>
                        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-control-label">description</label>
                        <textarea class="form-control summernote  @error('description') is-invalid @enderror" placeholder="Leave a comment here" id="description" name="description" style="height: 100px">{{ old('description') }}</textarea>
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