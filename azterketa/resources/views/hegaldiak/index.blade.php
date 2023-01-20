@extends('base')

@section('content')

<!-- Hegaldiak -->
<div class="container w-25 border p-4 mt-4 text-center">
    <h1>Hegaldiak</h1>

    <div class="mt-5">
        @foreach ($hegaldiak as $hegaldia)
        <div class="row py-1">
            <div class="col-md-9 d-flex align-items-center">
            <a href="{{ route('hegaldia-aldatu', ['id' => $hegaldia->id]) }}"><strong>Irteera:</strong> {{ $hegaldia->irteera
                    }} <strong>Helmuga:</strong> {{ $hegaldia->helmuga }} <strong>IrteeraData:</strong> {{
                    $hegaldia->irteeraData }} <strong>Iraupena:</strong> {{
                    $hegaldia->iraupena }}</a>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection