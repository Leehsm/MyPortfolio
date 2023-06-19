@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Portfolio</h2>
            <a href="{{ route('portfolio-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($desc as $item)
                  <tr>
                    <td>{{ $item->description }}</td>
                    <td>       
                        <a href="{{ route('portfolio-edit', $item->id) }}"class="btn btn-primary" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h2>List Of Project</h2>
            <a href="{{ route('portfolio-projadd') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $proj as $item )
                  <tr>
                    <td><img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"> </td>
                      <td>
                        <a>{{ $item->project_desc }}</a>
                      </td>
                      <td>       
                          <a href="{{ route('portfolio-projedit', $item->id) }}" class="btn btn-primary me-md-2" type="button">EDIT</a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection