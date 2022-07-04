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

                                @forelse ($customers as $customer)
                                <tr>
                                    <td>{{$customers->firstItem()+$loop->index }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>
                                        <a href="{{ route('customers.edit',$customer->id) }}"
                                            class="btn btn-warning text-light btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm btn-delete" title="Hapus"><i
                                                class="fa fa-trash"></i> Hapus</a>
                                        <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
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
                            {!! $customers->links() !!}
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
