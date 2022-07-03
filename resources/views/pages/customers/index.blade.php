@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Customer List
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('customers.create') }}" class="btn btn-sm btn-primary float-right">Add
                            Customer</a>
                    </div>
                    <div class="col-md-12 mt-2">
                        <table class="table table-hover table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($customers as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->phone }}</td>
                                    <td>{{ $product->address }}</td>
                                    <td>
                                        <a href="{{ route('customers.edit',$product->id) }}"
                                            class="btn btn-warning text-light btn-sm">Edit</a>
                                        <a href="{{ route('customers.edit',$product->id) }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">Data not found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $customers->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
