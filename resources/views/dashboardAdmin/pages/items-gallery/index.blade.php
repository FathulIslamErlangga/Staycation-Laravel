@extends('dashboardAdmin.layouts.main')
@section('main')
    <section class="add-item">
        <div class="orders">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">List  Image</h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>foto</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                               <td>{{ $item->id }}</td>
                                               <td>{{ $item->item->name }}</td>
                                               <td>
                                                   <img src="{{ asset('storage/'.$item->image)}}" alt="">
                                               </td>
                                              
                                               <td>
                                                   
                                                   <form action="{{ route('list-gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                                       @csrf
                                                       @method('delete')
                                                       <button class="btn btn-danger btn-sm">
                                                           <i class="fa fa-trash"></i>
                                                       </button>
                                                   </form>
                                               </td>
                                            </tr>
                                           @empty
                                               <tr>
                                                   <td colspan="6" class="text-center p-5">
                                                       Data Not Found
                                                   </td>
                                               </tr>
                                           @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection