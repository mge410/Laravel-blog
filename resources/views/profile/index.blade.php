@extends('layouts.main')
@section('content')
    <main class="site-main main-content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0 text-center">Ваш профиль</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="col-12">
                    <form action=" {{ route('profile.update', $user->id) }} " method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row flex-column align-content-xl-center">
                            <input type="text" name="user_id" hidden value="{{ $user->id }}">
                            <div class="row flex-column card-body col-5">
                                <div class="form-group">
                                    <p class="m-1">Имя</p>
                                    <input type="text" class="form-control mb-1" name="name" placeholder="Введите ваше имя" value="{{ $user->name }}">
                                    @error('name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <p class="m-1">Email</p>
                                    <input type="text" class="form-control mb-1" name="email" placeholder="Введите ваше имя" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="text-danger">
                                      {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row flex-column align-content-xl-center">
                                    <button type="submit" class="btn btn-info">Обновить профиль</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="row flex-column align-content-xl-center" action="{{route('logout')}}" method="post">
                        @csrf
                        <input class="btn btn-outline-danger" type="submit" value="Выйти">
                    </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
    </main>
@endsection
