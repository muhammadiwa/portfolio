@extends('layouts.app')
@section('content')
    
  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
        {{-- <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> --}}
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Mohammad Iwa</h1>
      <p>I'm <span class="typed" data-typed-items="Backend Developer"></span></p>
      <div class="social-links">
        {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
        {{-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('about')
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    @include('skill')
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    @include('resume')
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('portfolio')
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    @include('contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection