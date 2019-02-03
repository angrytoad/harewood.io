@extends('base')

@section('title','Get in touch with us.')
@section('content')
    <div class="container">
        <div class="row align-items-center my-5">
            @include('partials.flash')
            <div class="col-12 col-md-5">
                <h1>How can we help?</h1>
                <img
                        style="float:right; margin-left:2rem; margin-bottom:2rem;"
                        width="90px"
                        src="{{ asset('svg/paper-plane-dark.svg') }}"
                />
                <p class="text-justify">
                    Looking for a trusted business to work on your next big project? We'd love to hear from you. No matter how small or large
                    the job, we'll be sure to get in touch with you to work out how best we can help!
                </p>
                <p class="text-justify">
                    Typically we'll aim to respond to you within 2-3 working days during standard UK business hours, if you'd like to email us directly for
                    something more specific you can contact us by emailing <a href="mailto:tom@harewood.io">tom@harewood.io</a>
                </p>
            </div>
            <div class="col-12 col-md-6 offset-md-1">
                <form method="POST" action="{{ route('get-in-touch') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name</label>
                        <input
                                class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                type="text"
                                name="name"
                                required
                                placeholder="Let us know who you are."
                                value="{{ old('name') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input
                                class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                type="email"
                                name="email"
                                required
                                placeholder="This is the email we'll contact you on."
                                value="{{ old('email') }}"
                        />
                    </div>
                    <div class="form-group">
                        <label>What can we help you with?</label>
                        <textarea
                                class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                style="resize:none; height:200px;"
                                name="message"
                                required
                                placeholder="Setting up a new business and need a new website? Let us know how we can help."
                        >{{ old('message') }}</textarea>
                    </div>
                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                    <button class="btn text-light"><img width="24px" src="{{ asset('svg/paper-plane.svg') }}" /><span class="ml-3">Send Message</span></button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ env('RECAPTCHA_SITE_KEY') }}', {action: 'get_in_touch_message'})
                .then(function(token) {
                    document.getElementById('g-recaptcha-response').value = token;
                });
        });
    </script>
@endsection
