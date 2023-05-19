@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="col-8">
                <form action=" {{ route('admin.post.update', $post->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group col-8 d-flex">
                            <label for="exampleInputFile">Отображать на главной</label>
                            <input type="checkbox" class="form-control w-50" name="is_main" {{$post->is_main ? 'checked' : ''}}>
                            @error('is_main')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Введите название поста"
                                   value="{{$post->title}}">
                            @error('title')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{$post->content}}</textarea>
                            @error('content')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Превью изображение</label>
                            <div class="w-25 mb-2">
                                <img width="100%" src="{{ str_contains($post->main_image, 'http') ? $post->main_image : Storage::url($post->main_image)}}" alt="preview_image">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                           name="preview_image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('preview_image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Главное изображение</label>
                            <div class="w-25 mb-2">
                                <img width="100%" src="{{ str_contains($post->preview_image, 'http') ? $post->preview_image : Storage::url($post->preview_image)}}" alt="main_image">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                           name="main_image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                    <option
                                        value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Тэги</label>
                            <div class="select2-purple">
                                <select class="select2 select2-hidden-accessible" multiple=""
                                        data-placeholder="Выберите тэг" data-dropdown-css-class="select2-purple"
                                        style="width: 100%;" data-select2-id="15" tabindex="-1" aria-hidden="true" name="tag_ids[]">
                                    @foreach($tags as $tag)
                                        <option {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Изменить пост</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
