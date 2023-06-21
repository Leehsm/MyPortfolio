@extends('backend.welcome')
@section('content')

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Skills</h2>
            <form method="post" action="{{ route('skill-store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Skill</label>
                    <input type="text" class="form-control" id="inputPassword2" name="skill">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Level</label>
                    <input type="text" class="form-control" id="inputPassword2" name="level">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Percentage</label>
                    <input type="text" class="form-control" id="inputPassword2" name="percentage" >
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
