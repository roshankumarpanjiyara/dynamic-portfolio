@include('backend.layouts.header')

@include('backend.layouts.sidebar')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@10"])
    @yield('content')


@include('backend.layouts.footer')
