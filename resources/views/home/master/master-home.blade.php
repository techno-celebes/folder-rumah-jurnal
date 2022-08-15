@extends('master.master')
	
@section('main.content')
        <!-- ======= Header ======= -->
		@include('home.layout.header')
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        @yield('content_master_home')
        <!-- End #main -->

        <!-- ======= Footer ======= -->
		@include('home.layout.footer')
        <!-- End Footer -->
        <!-- Vendor JS Files -->

        <!-- Template Main JS File -->

        <script src="assets/js/main.js"></script>
@endsection