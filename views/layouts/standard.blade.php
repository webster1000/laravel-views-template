<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
	<body>
		@include('includes.header')
		@yield('content')
		@include('includes.footer')
	</body>
</html>
