@extends('layouts.admin')

@section('title', 'Create Gallery')

@section('breadcrumbs', 'Galleries' )

@section('second-breadcrumb')
<li>Create</li>
@endsection

@section('css')
<!-- <script src="/templateEditor/ckeditor/ckeditor.js"></script> -->
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center"></h3>
                </div>
                <form action="{{route('galleries.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-10">
                        <div class="mb-4">
                            <label for="title" class="font-weight-bold">Title</label>
                            <input type="text" name="title" placeholder="Gallery Title..." class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" required>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="slug" class="font-weight-bold">Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required>
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="desc" class="font-weight-bold">Description</label>
                            <textarea id="desc" placeholder="Description" class="form-control @error('desc') is-invalid @enderror" name="desc" rows="5" cols="10"></textarea>
                            @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4 mt-4">
                            <button class="btn btn-secondary" name="save_action" value="DRAFT">Save as draft</button>
                            <button class="btn btn-success" name="save_action" value="PUBLISH">Publish</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
{{-- ckeditor --}}
<script>
    CKEDITOR.replace('desc', {
        filebrowserUploadUrl: "{{route('galleries.upload', ['_token' => csrf_token()])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection