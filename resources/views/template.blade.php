<!DOCTYPE html>
<html class="fullscreen-bg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="http://infotools.test/assets/css/app.min.css'">
	<link rel="stylesheet" href="http://infotools.test/assets/css/bootstrap-custom.min.css">
	<link rel="stylesheet" href="http://infotools.test/assets/vendor/font-awesome/css/font-awesome.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- ICONS -->
	<link rel="infotools" sizes="76x76" href="http://infotools.test/assets/img/Infotools.jpg">
	<link rel="icon" type="image/png" sizes="96x96" href="http://infotools.test/assets/img/Infotools.png">
</head>
<body>
    @yield('content')
	@yield('navbar')
</body>
<script src="http://infotools.test/assets/js/bootstrap.min.js'"></script>
</html>




