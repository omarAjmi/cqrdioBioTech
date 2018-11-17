<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Dashboard</title>

   @include('admin.partials.styles.indexst')

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('admin.partials.header_mob')
        @include('admin.partials.sidebar')
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            @include('admin.partials.header_desk')
            @yield('content')
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
    @include('admin.partials.scripts.indexjs')
</body>

</html>
<!-- end document-->