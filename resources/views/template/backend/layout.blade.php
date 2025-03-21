{{-- header --}}
@include('template/backend/header')
{{-- end header --}}

<body>
    <script src="{{ url('') }}/assets/backend/static/js/initTheme.js"></script>
    <div id="app">
        {{-- sidebar --}}
        @include('template/backend/sidebar')
        {{-- end sidebar --}}

        <div id="main" class='layout-navbar navbar-fixed'>
            <!-- Navbar Header -->
            @include('template/backend/navbar')
            <!-- End Navbar -->

            <div id="main-content">
                {{-- content --}}
                @yield('content')
                {{-- end content --}}
            </div>

            {{-- footer --}}
            @include('template/backend/footer')
            {{-- end footer --}}

        </div>
    </div>
    {{-- js --}}
    @include('template/backend/js')
    {{-- end js --}}

</body>

</html>
