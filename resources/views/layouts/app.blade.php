
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sona | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="sona/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="sona/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="sona/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="sona/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="sona/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="sona/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="sona/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="sona/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="sona/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="sona/css/style.css" type="text/css">
	<!-- Bootstrap CSS -->
	<link href="sona/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="sona/css/app.css" rel="stylesheet">
	<link href="sona/css/icons.css" rel="stylesheet">
</head>

<body>
    <title>@yield('title')</title>

    @include('layouts.header')
    <div class="py-4">
        @yield('content')
    </div>


	@include('layouts.footer')

    <!-- Search model Begin -->
 <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{url('sona/js')}}/jquery-3.3.1.min.js"></script>
<script src="{{url('sona/js')}}/bootstrap.min.js"></script>
<script src="{{url('sona/js')}}/jquery.magnific-popup.min.js"></script>
<script src="{{url('sona/js')}}/jquery.nice-select.min.js"></script>
<script src="{{url('sona/js')}}/jquery-ui.min.js"></script>
<script src="{{url('sona/js')}}/jquery.slicknav.js"></script>
<script src="{{url('sona/js')}}/owl.carousel.min.js"></script>
<script src="{{url('sona/js')}}/main.js"></script>
</body>

</html>

    