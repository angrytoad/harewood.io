@extends('base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12 col-md">
                            <a href="{{ route('admin.contact-form-submissions') }}">
                                <button class="btn text-light">Contact Form Submissions</button>
                            </a>
                        </div>
                        <div class="col-12 col-md"></div>
                        <div class="col-12 col-md"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
