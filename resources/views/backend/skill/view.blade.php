@extends('backend.welcome')
@section('content') 

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Skill</h2>
            <a href="{{ route('skill-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Skill</th>
                    <th>Level</th>
                    <th>Percentage</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $skill as $item )
                  <tr>
                    <td>{{ $item->skill }}</td>
                    <td>{{ $item->level }}</td>
                    <td>{{ $item->percentage }}</td>
                    <td>       
                        <a href="{{ route('skill-edit', $item->id) }}" class="btn btn-primary me-md-2" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section><!-- End About Section -->

@endsection