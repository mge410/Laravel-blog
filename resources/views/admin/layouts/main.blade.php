<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href=" {{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }} ">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=" {{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- IonIcons -->
    <link rel="stylesheet" href=" {{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href=" {{ asset('dist/css/adminlte.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <link rel="stylesheet" href=" {{asset('plugins/summernote/summernote-bs4.min.css')}} ">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <div class="col-12 d-flex justify-content-between">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ route('home.index') }} " class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ route('posts.index') }} " class="nav-link">Posts</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ route('contact.index') }} " class="nav-link">Contact</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href=" {{ route('about.index') }} " class="nav-link">About</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <input class="btn btn-outline-primary" type="submit" value="Выйти">
                </form>
            </li>
        </ul>
        </div>

        <!-- Right navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('admin.include.sidebar')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">

    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src=" {{ asset('plugins/jquery/jquery.min.js') }} "></script>
<!-- Bootstrap -->
<script src=" {{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src=" {{  asset('plugins/select2/js/select2.full.min.js')}} "></script>

<!-- AdminLTE -->
<script src=" {{ asset('dist/js/adminlte.js') }} "></script>
<!-- Summernote -->
<script src=" {{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src=" {{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
    $('.select2').select2()
</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label::after{
        content: "...";
    }
</style>
</body>
</html>
