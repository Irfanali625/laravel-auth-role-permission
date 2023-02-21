@include('theme.head')
<div class="container-scroller">
    @include('theme.nav')
    <div class="container-fluid page-body-wrapper">
        @include('theme.sidebar')
        <div class="main-panel">
            @yield('content')
        </div>
        {{-- @include('sweetalert::alert') --}}
    </div>
</div>
@include('theme.script')
@include('theme.footer')
@yield('script')
