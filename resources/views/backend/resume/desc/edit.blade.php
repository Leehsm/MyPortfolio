@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <form method="post" action="{{ route('resume-Descupdate') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" value="{{  }}">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection