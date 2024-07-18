@extends('layouts.apps')

@section('Content')
<div class="container">
    <br><br>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Home Data</h1>
        <a href="{{ route('homes.create') }}" class="btn btn-primary">Add Home Data</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Keahlian</th>
                <th>About Me</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($homes as $home)
            <tr>
                <td>{{ $home->id }}</td>
                <td>
                    @if ($home->foto)
                        <img src="{{ asset('storage/images/' . $home->foto) }}" alt="{{ $home->foto }}" style="max-width: 100px;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $home->keahlian }}</td>
                <td>{{ $home->about_me }}</td>
                <td>{{ $home->deskripsi_about_me }}</td>
                <td>
                    <a href="{{ route('homes.edit', $home->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('homes.destroy', $home->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection