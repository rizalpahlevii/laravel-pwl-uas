@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Product List
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">Add
                            Product</a>
                    </div>
                    <div class="col-md-12 mt-2">
                        <table class="table table-hover table-bordered table-stripped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                function rupiah($params){
                                return "Rp " . number_format($params,2,',','.');
                                }
                                @endphp
                                @forelse ($products as $product)
                                <tr>
                                    <td>{{ $products->firstItem()+$loop->index }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ rupiah($product->price) }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        <a href="{{ route('products.edit',$product->id) }}"
                                            class="btn btn-warning text-light btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm btn-delete" title="Hapus"><i
                                                class="fa fa-trash"></i> Hapus</a>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                        </form>
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
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function(){
        $('.btn-delete').click(function (e) {
            if (confirm('Are you sure you want to delete this data?')) {
                $(this).siblings('form').submit();
            }
            return false;
        });
    });
</script>
@endpush
