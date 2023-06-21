<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html">Shahzlee Hasim</a></h1>
    </div>

    <nav id="navbar" class="nav-menu navbar">
      <ul>
        {{-- <li><a href="{{ route('home') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li> --}}
        <li><a href="{{ route('about-view') }}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="{{ route('skill-view') }}" class="nav-link scrollto"><i class="bx bx-street-view"></i> <span>Skill</span></a></li>
        <li><a href="{{ route('resume-view') }}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="{{ route('portfolio-view') }}" class="nav-link scrollto"><i class="bx bx-devices"></i> <span>Portfolio</span></a></li>
        <li><a href="{{ route('socmed-view') }}" class="nav-link scrollto"><i class="bx bx-at"></i> <span>Social Media</span></a></li>
        <li><a href="{{ route('contact-view') }}" class="nav-link scrollto"><i class="bx bx-wrench"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->
  </div>
</header><!-- End Header -->