@extends('layouts.admin')

@section('title', 'Create Article')

@section('breadcrumbs', 'Articles' )

@section('second-breadcrumb')
<li>Create</li>
@endsection

@section('css')
<script src="/templateEditor/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="col-12 mb-3">
                    <h3 align="center"></h3>
                </div>
                <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-10">
                        <div class="mb-4">
                            <label for="title" class="font-weight-bold">Title</label>
                            <input type="text" name="title" placeholder="Article Title..." class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" required>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="author" class="font-weight-bold">Author</label>
                            <input type="text" name="author" placeholder="Author's name" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}" required>
                            @error('authoe')
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
                            <label for="content" class="font-weight-bold">Content</label>
                            <textarea id="content" class="form-control ckeditor @error('content') is-invalid @enderror" name="content" rows="50" cols="100" required></textarea>
                            @error('content')
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
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('articles.upload', ['_token' => csrf_token()])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection