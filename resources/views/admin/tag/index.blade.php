@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-6">
                <h3>标签
                    <small>» 列表</small>
                </h3>
            </div>
            <div class="col-md-6 text-right">
                <!-- <a href="/admin/tag/create" class="btn btn-success btn-md">
                    <i class="fa fa-plus-circle"></i> 新增标签
                </a> -->
                <button class="btn btn-danger center" onClick="check()">新增标签</button>
            </div>
        </div>
        <script>
            function check() {
                Swal.fire({
                    title: 'Sweet!',
                    text: 'Modal with a custom image.',
                    imageUrl: 'https://unsplash.it/400/200',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Custom image',
                    animation: false
                })
            }
        </script>
        <div class="jumbotron jumbotron-fluid">

        </div>

        <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    @forelse($tags as $tag)
                        <li class="list-group-item">
                            <span class="badge badge-secondary float-right">{{ $tag->posts->count() }}</span>
                            <a href="{{ url('tags', ['name' => $tag->tag]) }}">{{ $tag->tag }}</a>
                        </li>
                    @empty
                        <li class="list-group-item">{{ lang('Nothing') }}</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    </div> 
@stop 

@section('scripts')
    <script>
        $(function () {
            $("#tags-table").DataTable({});
        });
    </script> 
@stop
