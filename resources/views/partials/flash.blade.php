<div class="col-12">
    <div class="flash">
        @if(count($errors->all()) > 0)
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @foreach (['primary','secondary', 'danger', 'warning', 'success', 'info'] as $msg)
            @if(session('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('alert-' . $msg) }}
                </p>
            @endif
        @endforeach
    </div>
</div>
