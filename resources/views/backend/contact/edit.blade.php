@extends('backend.welcome')
@section('content')

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Edit Contact</h2>
            <form method="post" action="{{ route('contact-update') }}" >
                @csrf
                <input type="hidden" name="id" value="{{ $contact->id }}">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" value="{{ $contact->description }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="email" value="{{ $contact->email }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="phone" value="{{ $contact->phone }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="address" value="{{ $contact->address }}">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">location URL</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="location" value="{{ $contact->location }}">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section><!-- End About Section -->

@endsection
