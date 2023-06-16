@extends('backend.welcome')
@section('content') 

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">


        <div class="section-title">
            <h2>Contact</h2>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('contact-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
                <a href="{{ route('contact-edit') }}"class="btn btn-primary" type="button">EDIT</a>
            </div>
            {{-- <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" value="{{ $contacts->description}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlinput type=" name="email" value="{{ $contacts->email}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleFormControlinput type=" name="phone" value="{{ $contacts->phone}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Address</label>
                <input type="text" class="form-control" id="exampleFormControlinput type=" name="address" value="{{ $contacts->address}}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">location URL</label>
                <input type="text" class="form-control" id="exampleFormControlinput type=" name="location" value="{{ $contacts->location}}">
            </div> --}}
        </div>
    </div>
</section><!-- End About Section -->

@endsection