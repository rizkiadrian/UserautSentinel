<!doctype html>
<html>
<head>
    @include('include.head')
</head>
<body>


    <header class="row">
        @include('include.header')
    </header>

    <div id="main" class="row">

            @yield('content')
            @if (count($errors) > 0)
<div class="alert alert-danger">
    There were some problems adding the category.<br />
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
           

    </div>

    <footer class="row">
       @include('include.js')
    </footer>


</body>
</html>
