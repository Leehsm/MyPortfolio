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
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 1</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail1" rows="3">{{ $exp->detail1 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 2</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail2" rows="3">{{ $exp->detail2 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 3</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail3" rows="3">{{ $exp->detail3 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 4</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail4" rows="3">{{ $exp->detail4 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 5</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail5" rows="3">{{ $exp->detail5 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 6</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail6" rows="3">{{ $exp->detail6 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 7</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail7" rows="3">{{ $exp->detail7 }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail 8</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="detail8" rows="3">{{ $exp->detail8 }}</textarea>
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection