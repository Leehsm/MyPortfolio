@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
            <form method="post" action="{{ route('portfolio-store') }}" >
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection