@extends('backend.welcome')
@section('content') 

<!--  About Section  -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <a href="{{ route('contact-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Description</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    {{-- <th>Location Url</th> --}}
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $contacts as $item )
                  <tr>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->address }}</td>
                    {{-- <td>{{ $item->location }}</td> --}}
                    <td>       
                        <a href="{{ route('contact-edit', $item->id) }}" class="btn btn-primary me-md-2" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section><!-- End About Section -->

@endsection