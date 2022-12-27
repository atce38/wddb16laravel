<div>
    @if(Session::has('success'))
    <div class="alert alert-success  alert-dismissible fade show">
        <strong>Success!</strong> {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        @php
        Session::forget('success');
        @endphp
    </div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger  alert-dismissible fade show">
        <strong>Failed!</strong> {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        @php
        Session::forget('error');
        @endphp
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger  alert-dismissible fade show">
        <ul class="h4">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-dismiss="alert"></button>
    </div>
@endif
</div>
