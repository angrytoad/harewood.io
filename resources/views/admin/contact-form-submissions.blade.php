@extends('base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <a href="{{ route('admin') }}">
                    <button class="btn text-light">Back</button>
                </a>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Contact Form Submissions</div>

                    <div class="card-body">
                        <table class="table table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submissions as $submission)
                                    <tr>
                                        <td>{{ $submission->name }}</td>
                                        <td>{{ $submission->email }}</td>
                                        <td>{{ $submission->message }}</td>
                                        <td>{{ $submission->created_at->toDayDateTimeString() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $submissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
