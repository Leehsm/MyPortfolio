@extends('backend.welcome')
@section('content') 

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>Add About</h2>
            <form method="post" action="{{ route('about-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="jobtitle">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="jobtitledesc"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="birthdate">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="age">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Education</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="edu">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="phone">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="web">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>

        </div>


    </div>
</section><!-- End About Section -->

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Skills</h2>
        <div class="mb-3">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="skills desc" name="skill_desc"></textarea>
        </div>
    </div>

    <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">
            <form method="post" action="{{ route('skill-store') }}" enctype="multipart/form-data">
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill1" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level1" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage1" placeholder="percentage">
                        </div>
                    </div>
                </div>

                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill2" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level2" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage2" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill3" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level3" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage3" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill4" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level4" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage4" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill5" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level5" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage5" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill6" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level6" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage6" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill7" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level7" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage7" placeholder="percentage">
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="skill8" placeholder="Skill Name">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="inputPassword2" name="level8" placeholder="Level">
                </div>
                <div class="progress">
                    <div class="progress-bar-wrap">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="percentage8" placeholder="percentage">
                        </div>
                    </div>
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>

        </div>

    </div>

    </div>
</section>
<!-- End Skills Section -->

@endsection