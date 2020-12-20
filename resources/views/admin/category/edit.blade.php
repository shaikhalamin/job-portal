@extends('layouts.admin')

@section('content')
<section class="">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <h5 class="text-center mt-3 mb-3 text-uppercase"><b>Edit Category</b></h5>
                <hr>
                <div class="card-body mt-1">
                    <form method="POST" action="{{ route('categories.update',['category'=>$category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="name" class="">Category Name</label>
                                <input type="text" name="name" value="{{ old('name') ?:$category->name }}" autocomplete="off" class="form-control @error('name') is-invalid @enderror " id="name">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>
                        </div>

                        <div class="form-row float-left">
                            <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-danger mr-2">Cancel</a>
                            <button type="submit" class="btn btn-sm btn-outline-info ">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('javascript')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('job_responsibility');

    $("#date_from").datepicker({
        dateFormat: "yy-mm-dd",
    });
    $("#date_to").datepicker({
        dateFormat: "yy-mm-dd",
    });
</script>

@endsection