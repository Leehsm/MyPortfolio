@extends('backend.welcome')
@section('content') 

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <a href="{{ route('socmed-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Linkedin</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $socmed as $item )
                  <tr>
                    <td>{{ $item->twitter }}</td>
                    <td>{{ $item->facebook }}</td>
                    <td>{{ $item->instagram }}</td>
                    <td>{{ $item->linkedin }}</td>
                    <td>       
                        <a href="{{ route('socmed-edit', $item->id) }}" class="btn btn-primary me-md-2" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section><!-- End About Section -->

@endsection