<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
		<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/tiny-slider.css')}}" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/shoop.css')}}" rel="stylesheet">

	</head>

	<body>
        @include('admin.layout.navbar')
        @yield('main')

    </body>