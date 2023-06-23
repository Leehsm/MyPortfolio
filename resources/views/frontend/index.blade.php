@extends('welcome')
@section('content')
@section('title')
Leehsm Portfolio
@endsection

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        @foreach ($about as $abt )
            <div class="section-title">
                <h2>About</h2>
                <p>{{ $abt->description }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $abt->current_title }}</h3>
                <p class="fst-italic">
                    {{ $abt->detail }}
                </p>
                <div class="row">
                    <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $abt->birthdate }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $abt->website }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $abt->phone }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $abt->address }}</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $abt->age }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Education:</strong> <span>{{ $abt->education }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $abt->email }}</span></li>
                        {{-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> --}}
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</section><!-- End About Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        @foreach ($about as $abt)
        <h2>Skills</h2>
        <p>{{ $abt->skill_desc }}</p>
        @endforeach
    </div>

    <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">
            @foreach ($skill1 as $skills )
                <div class="progress">
                    <span class="skill">{{ $skills->skill }} <i class="val">{{ $skills->level }} </i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            @foreach ($skill2 as $skills )
                <div class="progress">
                    <span class="skill">{{ $skills->skill }} <i class="val">{{ $skills->level }} </i></span>
                    <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skills->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    </div>
    
</section><!-- End Skills Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
    <div class="container">

    <div class="section-title">
        @foreach ($resumesum as $resume)
            <h2>Resume</h2>
            <p>{{ $resume->Description }}</p>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
                @foreach ($resumesum as $summary)
                    <h4>{{ $summary->name }}</h4>
                    <p><em>{{ $summary->summary }}</em></p>
                    <ul>
                    <li>{{ $summary->alamat }}</li>
                    <li>{{ $summary->phone }}</li>
                    <li>{{ $summary->email }}</li>
                    </ul>                
                @endforeach
            </div>

            <h3 class="resume-title">Education</h3>
            @foreach ( $resumeedu as $edu )
                <div class="resume-item">
                    <h4>{{ $edu->education }}</h4>
                    <h5>{{ $edu->year }}</h5>
                    <p><em>{{ $edu->university }}</em></p>
                    <p>{{ $edu->detail }}</p>
                </div>
            @endforeach        
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Job Experience</h3>
            @foreach ($resumeexp as $exp)
                <div class="resume-item">
                    <h4>{{ $exp->name }}</h4>
                    <h5>{{ $exp->year }}</h5>
                    <p><em>{{ $exp->company }}</em></p>
                    <ul>
                        @if($exp->detail1 != null)
                            <li>{{ $exp->detail1 }}</li>
                        @endif
                        @if($exp->detail2 != null)
                            <li>{{ $exp->detail2 }}</li>
                        @endif
                        @if($exp->detail3 != null)
                            <li>{{ $exp->detail3 }}</li>
                        @endif
                        @if($exp->detail4 != null)
                            <li>{{ $exp->detail4 }}</li>
                        @endif
                        @if($exp->detail5 != null)
                            <li>{{ $exp->detail5 }}</li>
                        @endif
                        @if($exp->detail6 != null)
                            <li>{{ $exp->detail6 }}</li>
                        @endif
                        @if($exp->detail7 != null)
                            <li>{{ $exp->detail7 }}</li>
                        @endif
                        @if($exp->detail8 != null)
                            <li>{{ $exp->detail8 }}</li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    </div>
</section><!-- End Resume Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Portfolio</h2>
        @foreach ($portfoliodesc as $desc )
            <p>{{ $desc->description }}</p>
        @endforeach
    </div>

    {{-- <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
        </ul>
        </div>
    </div> --}}

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($portfolio as $proj)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{ $proj->image }}" class="img-fluid" alt="">
                    <div class="portfolio-links">
                    <a href="{{ $proj->image }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $proj->project_desc }}"><i class="bx bx-plus"></i></a>
                    <a href="" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>            
        @endforeach
    </div>

    </div>
</section><!-- End Portfolio Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

    <div class="section-title">
        <h2>Contact</h2>
        @foreach ($contact as $contacts)
        <p>{{ $contacts->description }}</p>
    </div>

    <div class="row" data-aos="fade-in">

        {{-- <div class="col-lg-5 d-flex align-items-stretch"> --}}
        <div class="info">
            <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>{{ $contacts->address }}</p>
            </div>

            <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{ $contacts->email }}</p>
            </div>

            <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>{{ $contacts->phone }}</p>
            </div>

            <iframe src="{{ $contacts->location }}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
        @endforeach

        {{-- </div> --}}

        {{-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" action="{{ route('message') }}" class="php-email-form">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" required>
                </div>

                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Send Message">
                </div>
            </form>
        </div> --}}

    </div>

    </div>
</section><!-- End Contact Section -->

@endsection