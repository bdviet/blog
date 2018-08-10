<!DOCTYPE html>
<html lang="en">

@include('user/layout/head')

  <body>

    @include('user/layout/header')

    {{-- add main content --}}
    @section('main-content')

        @show
    {{-- Them noi dung trang  --}}
    @include('user/layout/footer')

  </body>

</html>
