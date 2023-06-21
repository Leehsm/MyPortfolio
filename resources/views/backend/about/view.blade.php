@extends('backend.welcome')
@section('content') 

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">


        <div class="section-title">
            <h2>About</h2>
            
            @foreach($abouts as $about)
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ route('about-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
                    <a href="{{ route('about-edit') }}"class="btn btn-primary" type="button">EDIT</a>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="2">{{$about->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="jobtitle" value={{$about->current_title}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Current Job Title Details</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="jobtitledesc">{{$about->detail}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="birthdate" value={{$about->birthdate}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Age</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="age" value={{$about->age}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Education</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="edu" value={{$about->education}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" value={{$about->phone}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value={{$about->email}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="address" value={{$about->address}}>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Website</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="web" value={{$about->Website}}>
                </div>
            @endforeach

        </div>
    </div>
</section><!-- End About Section -->

@endsection