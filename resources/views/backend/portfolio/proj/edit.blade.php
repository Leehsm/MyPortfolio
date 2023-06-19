@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Edit Project</h2>
            <form method="post" action="{{ route('portfolio-projupdate') }}" >
                @csrf
                <input type="hidden" name="id" value="{{ $proj->id }}">
                <input type="hidden" name="old_image" value="{{ $proj->image }}">
                <img src="{{ asset($proj->image) }}" class="card-img-top" style="height: 130px; width: 280px;">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleFormControlinput type=" name="image" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description of Project</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3">{{ $proj->project_desc }}</textarea>
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection