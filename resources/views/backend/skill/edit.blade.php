@extends('backend.welcome')
@section('content')

<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">

    <div class="section-title">
        <h2>Edit Skills</h2>
            <form method="post" action="{{ route('skill-update') }}">
                @csrf
                <input type="hidden" name="id" value="{{ $skill->id }}">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Skill</label>
                    <input type="text" class="form-control" id="inputPassword2" name="skill" value="{{ $skill->skill }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Level</label>
                    <input type="text" class="form-control" id="inputPassword2" name="level" value="{{ $skill->level }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Percentage</label>
                    <input type="text" class="form-control" id="inputPassword2" name="percentage" value="{{ $skill->percentage }}">
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
