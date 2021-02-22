<!DOCTYPE html>
<html lang="en">

<head>
    @include('incs.head')
</head>

<body>

@include('incs.header')

@yield('content')

@include('incs.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('incs.foot')

</body>

</html>
