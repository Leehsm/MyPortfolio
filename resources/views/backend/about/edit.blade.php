@extends('backend.welcome')
@section('content') 

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2>Edit About</h2>
            <form method="post" action="{{ route('about-update') }}" >
                @csrf
                <input type="hidden" name="id" value="{{ $abouts->id }}">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="2">{{ $abouts->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="jobtitle" value="{{ $abouts->current_title }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="jobtitledesc">{{ $abouts->detail }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="birthdate" value="{{ $abouts->birthdate }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="age" value="{{ $abouts->age }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Education</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="edu" value="{{ $abouts->education }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" phone>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $abouts->email }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value="{{ $abouts->address }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="web" value="{{ $abouts->website }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Skill Desc</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="skilldesc" value="{{ $abouts->skill_desc }}">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>

        </div>


    </div>
</section><!-- End About Section -->


@endsection