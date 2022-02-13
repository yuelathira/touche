@extends('layouts.admin')

@section('title', 'Galleries')

@section('breadcrumbs', 'Overview Galleries')

@section('css')
<style>
    .underline:hover {
        text-decoration: underline;
    }
</style>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                {{-- button create --}}
                <div class="mb-5 text-right">
                    <a href="{{route('galleries.create')}}" class="btn btn-sm btn-success"> <i class="fa fa-plus"></i> Create</a>
                </div>

                {{-- display filter --}}
                <div class="row mb-3">
                    <div class="col-sm-7">
                        <ul class="nav nav-tabs ">
                            <li class="nav-item">
                                <a class="nav-link p-2 px-3 {{Request::get('status') == NULL ? 'active' : ''}}" href="{{route('galleries.index')}}">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 px-3 {{Request::get('status') == 'publish' ?'active' : '' }}" href="{{route('galleries.index', ['status' =>'publish'])}}">Publish</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 px-3 {{Request::get('status') == 'draft' ?'active' : '' }}" href="{{route('galleries.index', ['status' =>'draft'])}}">Draft</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{route('galleries.index')}}">
                            <div class="input-group">
                                <input name="keyword" type="text" value="{{Request::get('keyword')}}" class="form-control" placeholder="Filter by title">
                                <div class="input-group-append">
                                    <input type="submit" value="Filter" class="btn btn-info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- alert --}}
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif

                {{-- table --}}
                <table class="table">
                    <thead class="text-light" style="background-color:#33b751 !important">
                        <tr>
                            <th width="12px">No</th>
                            <th width="160px">Image</th>
                            <th width="120px">Created at</th>
                            <th width="120px">Updated at</th>
                            <th class="">Gallery Title</th>
                            <th width="0px"></th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $index => $gallery)

                        <tr>
                            <td>{{$index+1}}</td>
                            <td align="left">
                                @if($gallery->image)
                                <img src="{{asset('galleries_image/'.$gallery->image)}}" alt="" width="120px">
                                @endif
                            </td>
                            <td>
                                <span class="">{{date('d M Y', strtotime($gallery->created_at))}}</span>
                            </td>
                            <td>
                                <span class="">{{date('d M Y', strtotime($gallery->updated_at))}}</span>
                            </td>
                            <td>
                                <a href="{{route('galleries.edit', [$gallery->id])}}" style="color:#00838f;" class="underline">
                                    <span class="d-block">{{$gallery->title}}</span>
                                </a>
                            </td>
                            <td class="text-right pr-4">
                                @if ($gallery->status=='DRAFT')
                                <span class="font-italic text-danger">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('galleries.edit', [$gallery->id])}}" class="bnt btn-sm btn-warning text-light" title="Edit"><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-sm btn-danger" onclick="deleteConfirm('{{$gallery->id}}', '{{$gallery->title}}')" data-target="#modalDelete" data-toggle="modal"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{$galleries->appends(Request::all())->links()}}
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>


<!-- Modal Delete -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-inline">Delete Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="message">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="" id="url" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Delete -->


@endsection

@section('script')
<script>
    function deleteConfirm(id, name) {
        var url = '{{ route("galleries.destroy", ":id") }}';
        url = url.replace(':id', id);
        document.getElementById("url").setAttribute("action", url);
        document.getElementById('message').innerHTML = "Are you sure want to delete gallery <b>" + name + "</b> ?"
        $('#modalDelete').modal();
    }
</script>
@endsection