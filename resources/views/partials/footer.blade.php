<div id="footer" class="container-fluid mt-3">
    <div class="row pt-5 pb-3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col text-center">
                    <a href="{{ route('welcome') }}" class="d-block text-dark {{ active('welcome') }}">
                        Harewood Studios
                    </a>
                    <a href="{{ route('get-in-touch') }}" class="d-block text-dark {{ active('get-in-touch') }}">
                        Get in Touch
                    </a>
                </div>
                <div class="col text-center">
                    <a href="https://www.facebook.com/harewoodstudios">
                        <img height="32px" src="{{ asset('/svg/facebook.svg') }}" />
                    </a>
                </div>
                <div class="col text-center my-3 my-md-0">
                    <a href="{{ route('welcome') }}" class="{{ active('welcome') }}">
                        <img height="70px" src="{{ asset('/svg/logo_2.svg') }}" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5">
        <h5 class="col text-center">
            &copy; Harewood Studios {{ \Carbon\Carbon::now()->year }}
        </h5>
    </div>
</div>