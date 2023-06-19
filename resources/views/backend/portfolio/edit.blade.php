@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Edit Portfolio</h2>
            <form method="post" action="{{ route('portfolio-update') }}" >
                @csrf
                <input type="hidden" name="id" value="{{ $desc->id }}">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3">{{ $desc->description }}</textarea>
                </div>

                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Submit">					 
                </div>
            </form>
        </div>
    </div>
</section>

@endsection