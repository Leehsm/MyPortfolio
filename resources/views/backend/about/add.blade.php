@extends('backend.welcome')
@section('content') 

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Current Job Title</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Current Job Title Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Age</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Education</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Website</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" >
            </div>

        </div>


    </div>
</section><!-- End About Section -->

<!-- ======= Skills Section ======= -->
{{-- <section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Skills</h2>
        <div class="mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="skills desc"></textarea>
        </div>
    </div>

    <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">
            <form class="row g-3">
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="percentage">
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="percentage">
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="percentage">
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="percentage">
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>

    </div>
</section> --}}
<!-- End Skills Section -->

@endsection