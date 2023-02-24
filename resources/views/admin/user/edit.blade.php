@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование пользователя</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="col-12">
                <form action=" {{ route('admin.user.update', $user->id) }} " method="post">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Введите имя пользователя" value="{{ $user->name }}">
                            @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Введите email" value="{{ $user->email }}">
                            @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}">
                        </div>
                        <div class="form-group">
                            <label>Выберите роль пользователя</label>
                            <select class="form-control" name="role">
                                @foreach($roles as $id => $role)
                                    <option
                                        value="{{$id}}" {{$id == $user->role ? 'selected' : ''}}>{{$role}}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-info">Изменить пользователя</button>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
