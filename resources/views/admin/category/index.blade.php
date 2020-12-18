@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row">
        <div class="col-md-12">
            @include('partials.admin.flash_message')
            <h4 class="mt-3 mb-2">Category</h4>
            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary text-white">
                <i class="fa fa-plus" aria-hidden="true"></i> Add Category</a>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover border font-16">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">User</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key=>$category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status }}</td>
                                <td></td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>

                                <td>

                                    <a class="btn btn-info btn-sm text-white" href="{{ route('categories.edit',['category'=>$category->id]) }}">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{ route('categories.show',['category'=>$category->id]) }}" class="btn btn-sm btn-info text-white">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>

                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection