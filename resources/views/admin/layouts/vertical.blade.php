@include('admin.layouts.shared/main')

<head>
    @include('admin.layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('admin.layouts.shared/head-css')
</head>

<body>

    <div class="wrapper">

        @include('admin.layouts.shared/sidenav')

        <div class="page-content">

            @include('admin.layouts.shared/topbar')

            <main>
                <!-- Start Content-->
                @yield('content')
            </main>

            @include('admin.layouts.shared/footer')

        </div>

    </div>

    </div>

    @include('admin.layouts.shared/footer-scripts')

    @yield('script')

    @vite(['resources/js/app.js'])

</body>

</html>