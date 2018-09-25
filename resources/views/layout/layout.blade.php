<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{url('dist/css/bootstrap.css')}}"

</head>
<body>

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/produtos')}}">Produtos</a></li>

        </ol>
    </nav>


    @yield('content')





</div>
<script href="{{url('js/jquery.js')}}"></script>
<script href="{{url('dist/js/boostrap.jss')}}"></script>
<script href="{{url('js/complete.js')}}"></script>
<script src="{{url('js/moeda.js')}}"></script>
<script src="{{url('js/jquery.mask.min.js')}}"></script>

</body>
</html>