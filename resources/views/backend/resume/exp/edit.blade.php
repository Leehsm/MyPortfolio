@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <form method="post" action="{{ route('resume-Expupdate') }}" >
                @csrf
                <h2>Experience</h2>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Experience</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="exp" value="{{ $exp->name }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Year</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="year" value="{{ $exp->year }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Company</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="company" value="{{ $exp->company }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 1</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail1" value="{{ $exp->detail1 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 2</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail2" value="{{ $exp->detail2 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 3</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail3" value="{{ $exp->detail3 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 4</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail4" value="{{ $exp->detail4 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 5</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail5" value="{{ $exp->detail5 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 6</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail6" value="{{ $exp->detail6 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 7</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail7" value="{{ $exp->detail7 }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Detail 8</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="detail8" value="{{ $exp->detail8 }}">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection