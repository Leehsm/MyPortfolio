<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Shahzlee Hasim</a></h1>
      @foreach ($socmed as $media)
      <div class="social-links mt-3 text-center">
        <a href="{{ $media->twitter }}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{ $media->facebook }}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{ $media->instagram }}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{ $media->linkedin }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      @endforeach
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-devices"></i> <span>Portfolio</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->