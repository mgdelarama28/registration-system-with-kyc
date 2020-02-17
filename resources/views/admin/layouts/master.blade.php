<!DOCTYPE html>
<html lang="en">
@include('admin.includes.meta-tags')

@include('admin.includes.styles')

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">
        @include('admin.includes.navbar')

        @include('admin.includes.sidebar')

        @yield('content')

        @include('admin.includes.footer')
    </div>

    @include('admin.includes.scripts')
</body>
</html>
