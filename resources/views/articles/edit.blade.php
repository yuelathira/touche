@extends('layouts.admin')

@section('title', 'Article')

@section('breadcrumbs', 'Edit Article')

@section('second-breadcrumb')
<li>Edit</li>
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
                <form action="{{route('articles.update', [$article->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-10">
                        <div class="mb-4">
                            <label for="title" class="font-weight-bold">Title</label>
                            <input type="text" name="title" placeholder="Article Title..." class="form-control @error('title') is-invalid @enderror" value="{{$article->title}}" required>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="author" class="font-weight-bold">Author</label>
                            <input type="text" name="author" placeholder="Author's name" class="form-control @error('title') is-invalid @enderror" value="{{$article->author}}" required>
                            @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="font-weight-bold d-flex">Image</label>
                            @if($article->image)
                            <img src="{{asset('articles_image/'.$article->image)}}" alt="" width="120px">
                            @else
                            No Image
                            @endif
                            <input type="file" name="image" class="form-control mt-2">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="font-weight-bold">Content</label>
                            <textarea id="content" class="form-control ckeditor  @error('content') is-invalid @enderror" name="content" rows="50" cols="100" required>{{$article->content}}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-4">
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