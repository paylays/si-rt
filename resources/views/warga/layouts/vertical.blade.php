@include('warga.layouts.shared/main')

<head>
    @include('warga.layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('warga.layouts.shared/head-css')
</head>

<body>

    <div class="wrapper">

        @include('warga.layouts.shared/sidenav')

        <div class="page-content">

            @include('warga.layouts.shared/topbar')

            <main>
                <!-- Start Content-->
                @yield('content')
            </main>

            @include('warga.layouts.shared/footer')

        </div>

    </div>

    </div>

    @include('warga.layouts.shared/footer-scripts')

    @yield('script')

    @vite(['resources/js/app.js'])

</body>

</html>