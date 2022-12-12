<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Roshan Kumar Panjiyara</title>
  <meta content="roshan kumar panjiyara" name="description">
  <meta content="roshan kumar panjiyara" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('logos/roshan_logo_small_2.png')}}" rel="icon">
  <link href="{{asset('logos/roshan_logo_small_2.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    @include('frontend.layouts.header')
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@10"])
  <!-- ======= Hero Section ======= -->
  @include('frontend.layouts.banner')<!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('frontend.layouts.about')<!-- End About Section -->

    {{-- <!-- ======= Facts Section ======= -->
    @include('frontend.layouts.facts')<!-- End Facts Section --> --}}

    <!-- ======= Skills Section ======= -->
    @include('frontend.layouts.skills')<!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('frontend.layouts.resume')<!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('frontend.layouts.portfolio')<!-- End Portfolio Section -->

    {{-- <!-- ======= Services Section ======= -->
    @include('frontend.layouts.services')<!-- End Services Section --> --}}

    <!-- ======= Contact Section ======= -->
    @include('frontend.layouts.contact')<!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')<!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  {{-- <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
