@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <form method="post" action="{{ route('resume-Edustore') }}" >
                @csrf
                <h2>Education</h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Certificate</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="cert" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Year</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="year" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">University</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="uni" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail" >
                </div>
                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection