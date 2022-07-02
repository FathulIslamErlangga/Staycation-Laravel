@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="add-item">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">List Penginapan</h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>city</th>
                                            <th>country</th>
                                            <th>price</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                               <td>{{ $item->id }}</td>
                                               <td>{{ $item->name }}</td>
                                               <td>{{ $item->city }}</td>
                                               <td>{{ $item->country }}</td>
                                               <td>{{ $item->price }}</td>

                                               <td>
                                                   {{-- <a href="{{ route('list-item.gallery') }}" class="btn btn-info btn-sm"> --}}
                                                   <a href="{{ route('list-item.show', $item->id) }}" class="btn btn-info btn-sm">
                                                       <i class="fa fa-picture-o"></i>
                                                   </a>
                                                   <a href="{{ route('list-item.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                                       <i class="fa fa-pencil"></i>
                                                   </a>
                                                   <form action="{{ route('list-item.destroy', $item->id) }}" method="post" class="d-inline">
                                                       @csrf
                                                       @method('delete')
                                                       <button class="btn btn-danger btn-sm">
                                                           <i class="fa fa-trash"></i>
                                                       </button>
                                                   </form>
                                               </td>
                                            </tr>
                                           @empty
                                           <td colspan="6" class="text-center p-5">
                                            Data Not Found
                                            <a href="{{ route('list-item.create') }}" class="d-block">Create Data</a>
                                        </td>
                                           @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection