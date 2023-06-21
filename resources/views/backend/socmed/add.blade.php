@extends('backend.welcome')
@section('content')

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">


        <div class="section-title">
            <h2>Add Contact</h2>
            <form method="post" action="{{ route('socmed-store') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Twitter</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="twitter" >
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="facebook">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="instagram">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Linkedin</label>
                    <input type="text" class="form-control" id="exampleFormControlinput type=" name="linkedin">
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section><!-- End About Section -->

@endsection
