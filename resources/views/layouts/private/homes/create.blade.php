@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Add Home Data</h1>
        <a href="{{ route('homes.index') }}" class="btn btn-secondary">Back to Home Data</a>
    </div>
    <form action="{{ route('homes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="foto">Foto:</label>
            <input type="file" class="form-control-file @error('foto') is-invalid @enderror" id="foto" name="foto">
            @error('foto')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keahlian">Keahlian:</label>
            <input type="text" class="form-control @error('keahlian') is-invalid @enderror" id="keahlian" name="keahlian" value="{{ old('keahlian') }}">
            @error('keahlian')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi_keahlian">Deskripsi Keahlian:</label>
            <textarea class="form-control @error('deskripsi_keahlian') is-invalid @enderror" id="deskripsi_keahlian" name="deskripsi_keahlian">{{ old('deskripsi_keahlian') }}</textarea>
            @error('deskripsi_keahlian')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="about_me">About Me:</label>
            <input type="text" class="form-control @error('about_me') is-invalid @enderror" id="about_me" name="about_me" value="{{ old('about_me') }}">
            @error('about_me')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi_about_me">Deskripsi About Me:</label>
            <textarea class="form-control @error('deskripsi_about_me') is-invalid @enderror" id="deskripsi_about_me" name="deskripsi_about_me">{{ old('deskripsi_about_me') }}</textarea>
            @error('deskripsi_about_me')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
