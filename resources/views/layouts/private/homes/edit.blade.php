@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Edit Home Data</h1>
        <a href="{{ route('homes.index') }}" class="btn btn-secondary">Back to Home Data</a>
    </div>
    <form action="{{ route('homes.update', $home->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="foto">Foto:</label>
            <br>
            @if ($home->foto)
                <img src="{{ asset('storage/images/' . $home->foto) }}" alt="{{ $home->foto }}" style="max-width: 200px;">
                <br><br>
            @else
                No Image
                <br><br>
            @endif
            <input type="file" class="form-control-file @error('foto') is-invalid @enderror" id="foto" name="foto">
            <small class="form-text text-muted">Upload new file if you want to replace existing one.</small>
            @error('foto')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="keahlian">Keahlian:</label>
            <input type="text" class="form-control @error('keahlian') is-invalid @enderror" id="keahlian" name="keahlian" value="{{ old('keahlian', $home->keahlian) }}">
            @error('keahlian')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi_keahlian">Deskripsi Keahlian:</label>
            <textarea class="form-control @error('deskripsi_keahlian') is-invalid @enderror" id="deskripsi_keahlian" name="deskripsi_keahlian">{{ old('deskripsi_keahlian', $home->deskripsi_keahlian) }}</textarea>
            @error('deskripsi_keahlian')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="about_me">About Me:</label>
            <input type="text" class="form-control @error('about_me') is-invalid @enderror" id="about_me" name="about_me" value="{{ old('about_me', $home->about_me) }}">
            @error('about_me')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi_about_me">Deskripsi About Me:</label>
            <textarea class="form-control @error('deskripsi_about_me') is-invalid @enderror" id="deskripsi_about_me" name="deskripsi_about_me">{{ old('deskripsi_about_me', $home->deskripsi_about_me) }}</textarea>
            @error('deskripsi_about_me')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection