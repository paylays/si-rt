<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.layouts.shared/title-meta', ['title' => $title])

  @include('admin.layouts.shared/head-css')

</head>

<body class="bg-primary d-flex justify-content-center align-items-center min-vh-100 p-5">

 @yield('content')

 @include('admin.layouts.shared/footer-scripts')

</body>

</html>
