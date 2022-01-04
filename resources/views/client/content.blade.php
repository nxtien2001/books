<!DOCTYPE html>
<html lang="vi">

@include('client.head')

<body>
    @include('client.header')

    @yield('content')

    @include('client.footer')

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#" style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>