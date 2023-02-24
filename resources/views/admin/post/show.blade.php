@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{$post->title}}</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="row col-12 mt-4">
            <div class="col-11">
                <div class="card">

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                            <tr>
                                <td> ID </td>
                                <td> {{$post->id}} </td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td> TITLE </td>
                                <td> {{$post->title}} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="col-12">
                <form action="{{ route('admin.post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-info" href=" {{ route('admin.post.edit', $post->id) }} ">Изменить пост</a>
                    <button type="submit" class="btn btn-danger ml-lg-2">
                        Удалить пост
                    </button>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>

        <!-- /.content -->
    </div>
@endsection
