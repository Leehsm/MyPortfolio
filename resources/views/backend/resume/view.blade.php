@extends('backend.welcome')
@section('content') 

<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <a href="{{ route('resume-Descadd') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
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
                    <td>
                      <a>{{ $item->Description }}</a>
                    </td>
                    <td>       
                        <a href="{{ route('resume-Descedit', $item->id) }}"class="btn btn-primary" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h2>Summary</h2>
            <a href="{{ route('resume-Summaryadd') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Summary</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $summary as $item )
                  <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->summary }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->email }}</td>
                    <td>       
                        {{-- <a href="{{ route('resumesummary-add') }}" class="btn btn-primary me-md-2" type="button">ADD</a> --}}
                        <a href="{{ route('resume-Summaryedit', $item->id) }}" class="btn btn-primary me-md-2" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h2>Education</h2>
            <a href="{{ route('resume-Eduadd') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Certificate</th>
                    <th>Year</th>
                    <th>University</th>
                    <th>Detail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($edu as $item)
                  <tr>
                    <td>{{ $item->education }}</td>
                    <td>{{ $item->year }}</td>
                    <td>{{ $item->university }}</td>
                    <td>{{ $item->detail }}</td>
                    <td>       
                        <a href="{{ route('resume-Eduedit', $item->id) }}"class="btn btn-primary" type="button">EDIT</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>

            <h2>Experience</h2>
            <a href="{{ route('resume-Expadd') }}" class="btn btn-primary me-md-2" type="button">ADD</a>
            <table class="table">
                <thead>
                  <tr>
                    <th>Experience</th>
                    <th>Year</th>
                    <th>Company</th>
                    <th>Detail</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($exp as $item)
                    <tr>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->year }}</td>
                      <td>{{ $item->company }}</td>
                      <td>{{ $item->detail }}</td>
                      <td>       
                          <a href="{{ route('resume-Expedit', $item->id) }}"class="btn btn-primary" type="button">EDIT</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection