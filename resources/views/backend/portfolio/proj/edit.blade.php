@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Edit Project</h2>
            <form method="post" action="{{ route('portfolio-update') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description of Project</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" >
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection