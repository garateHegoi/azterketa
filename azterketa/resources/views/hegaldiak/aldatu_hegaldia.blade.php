@extends('base')

@section('content')

<div class="container w-25 border p-4">
    <div class="row mx-auto">
        <form method="POST" action="{{ route('hegaldia-aldatu-db', ['id' => $hegaldia->id]) }}">
            @method('PATCH')
            @csrf

            <div class="mb-3 col">
                @error('Irteera')
                <div class="alert alert-danger">
                    <p><strong>Mezua : </strong> {{ $message }}</p>
                </div>
                @enderror
                @error('Helmuga')
                <div class="alert alert-danger">
                    <p><strong>Mezua : </strong> {{ $message }}</p>
                </div>
                @enderror
                @error('IrteeraData')
                <div class="alert alert-danger">
                    <p><strong>Mezua : </strong> {{ $message }}</p>
                </div>
                @enderror
                @error('Iraupena')
                <div class="alert alert-danger">
                    <p><strong>Mezua : </strong> {{ $message }}</p>
                </div>
                @enderror

                @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif

                <input type="text" class="form-control" name="irteera" placeholder="Irteera" value="{{ $hegaldia->irteera }}">
                <input type="text" class="form-control" name="helmuga" placeholder="Helmuga" value="{{ $hegaldia->helmuga }}">
                <input type="text" class="form-control" name="irteeraData" placeholder="IrteeraData" value="{{ $hegaldia->irteeraData }}">
                <input type="text" class="form-control" name="iraupena" placeholder="Iraupena" value="{{ $hegaldia->iraupena }}">

                <button type="submit" class="btn btn-primary">Hegaldia</button>
            </div>
        </form>
    </div>
</div>

@endsection