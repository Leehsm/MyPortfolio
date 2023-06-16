@extends('backend.welcome')
@section('content')

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">


        <div class="section-title">
            <h2>Add Contact</h2>
            <form method="post" action="{{ route('contact-store') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="desc" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="email">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="phone">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="address">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">location URL</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="location">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section><!-- End About Section -->

@endsection
